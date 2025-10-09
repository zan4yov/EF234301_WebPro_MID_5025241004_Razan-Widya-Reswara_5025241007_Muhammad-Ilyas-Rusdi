<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\TahunAkademik;
use App\Models\Kelas;
use App\Models\Krs;
use App\Models\DetailKrs;
use App\Models\KelasWaitlist;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KrsController extends Controller {
    public function index(Request $request): Response {
        $mahasiswa = $request->user()->mahasiswa;
        $activePeriod = TahunAkademik::where('status_aktif', 1)->first();
        
        $currentKrs = null;
        $availableClasses = [];

        if ($activePeriod) {
            $currentKrs = $mahasiswa->krs()
                ->where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)
                ->with(['detailKrs.kelas.matakuliah', 'detailKrs.kelas.dosen', 'detailKrs.kelas.ruangan'])
                ->first();

            $availableClasses = Kelas::where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)
                ->whereHas('matakuliah', function ($query) use ($mahasiswa) {
                    $query->where('program_studi_id_prodi', $mahasiswa->program_studi_id_prodi)
                          ->where('minimal_semester', '<=', $mahasiswa->semester);
                })
                ->with(['matakuliah', 'dosen', 'ruangan'])
                ->get();
        }

        return Inertia::render('mahasiswa/KRS', [
            'mahasiswa' => $mahasiswa,
            'currentKrs' => $currentKrs,
            'availableClasses' => $availableClasses,
            'activePeriod' => $activePeriod,
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'kelas_ids' => ['required', 'array'],
            'kelas_ids.*' => ['string', 'exists:kelas,id_kelas'],
        ]);

        $mahasiswa = $request->user()->mahasiswa;
        $activePeriod = TahunAkademik::where('status_aktif', 1)->first();

        if (!$activePeriod) {
            return back()->withErrors(['kelas_ids' => 'Tidak ada periode KRS yang aktif.']);
        }
        try {
            DB::transaction(function () use ($request, $mahasiswa, $activePeriod) {
                $existingKrs = Krs::where('mahasiswa_nrp', $mahasiswa->nrp)
                    ->where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)
                    ->with('detailKrs')
                    ->first();

                $originalKelasIds = $existingKrs ? $existingKrs->detailKrs->pluck('kelas_id_kelas')->toArray() : [];

                $krs = Krs::firstOrCreate(
                    [
                        'mahasiswa_nrp' => $mahasiswa->nrp,
                        'tahun_akademik_id_tahun_akademik' => $activePeriod->id_tahun_akademik,
                    ],
                    [
                        'id_krs' => str_replace('-', '', (string) Str::uuid()),
                        'status_persetujuan' => 0,
                        'tanggal_pengajuan' => now(),
                        'semester' => $mahasiswa->semester
                    ]
                );

                $krs->status_persetujuan = 0;
                $krs->tanggal_pengajuan = now();
                $krs->save();

                $krs->detailKrs()->delete();
                $details = [];
                foreach ($request->kelas_ids as $kelasId) {
                    $kelas = Kelas::find($kelasId);
                    $currentTaken = DetailKrs::where('kelas_id_kelas', $kelasId)->count();
                    if ($kelas && $currentTaken >= ($kelas->kapasitas ?? 0)) {
                        KelasWaitlist::firstOrCreate([
                            'kelas_id_kelas' => $kelasId,
                            'mahasiswa_nrp' => $mahasiswa->nrp,
                        ]);
                        continue;
                    }
                    $details[] = [
                        'id_detail_krs' => str_replace('-', '', (string) Str::uuid()),
                        'krs_id_krs' => $krs->id_krs,
                        'kelas_id_kelas' => $kelasId,
                    ];
                }
                if (!empty($details)) {
                    DetailKrs::insert($details);
                }

                $affected = array_unique(array_merge($originalKelasIds, $request->kelas_ids));
                if (!empty($affected)) {
                    $counts = DetailKrs::select('kelas_id_kelas', DB::raw('COUNT(*) as jumlah'))
                        ->whereIn('kelas_id_kelas', $affected)
                        ->groupBy('kelas_id_kelas')
                        ->pluck('jumlah', 'kelas_id_kelas');

                    foreach ($affected as $kelasId) {
                        Kelas::where('id_kelas', $kelasId)->update([
                            'terisi' => $counts[$kelasId] ?? 0,
                        ]);
                    }

                    foreach ($affected as $kelasId) {
                        $kelas = Kelas::lockForUpdate()->find($kelasId);
                        if (!$kelas) continue;
                        $kapasitas = $kelas->kapasitas ?? 0;
                        if ($kapasitas <= 0) continue;

                        $taken = DetailKrs::where('kelas_id_kelas', $kelasId)->count();
                        while ($taken < $kapasitas) {
                            $next = KelasWaitlist::where('kelas_id_kelas', $kelasId)
                                ->orderBy('created_at')
                                ->first();
                            if (!$next) break;

                            $krsPromote = Krs::firstOrCreate(
                                [
                                    'mahasiswa_nrp' => $next->mahasiswa_nrp,
                                    'tahun_akademik_id_tahun_akademik' => $kelas->tahun_akademik_id_tahun_akademik,
                                ],
                                [
                                    'id_krs' => str_replace('-', '', (string) Str::uuid()),
                                    'status_persetujuan' => 0,
                                    'tanggal_pengajuan' => now(),
                                    'semester' => Mahasiswa::find($next->mahasiswa_nrp)?->semester ?? 1,
                                ]
                            );

                            $already = DetailKrs::where('krs_id_krs', $krsPromote->id_krs)
                                ->where('kelas_id_kelas', $kelasId)
                                ->exists();
                            if ($already) {
                                $next->delete();
                                continue;
                            }

                            DetailKrs::create([
                                'id_detail_krs' => str_replace('-', '', (string) Str::uuid()),
                                'krs_id_krs' => $krsPromote->id_krs,
                                'kelas_id_kelas' => $kelasId,
                            ]);

                            $next->delete();
                            $taken++;
                        }

                        if ($taken != ($counts[$kelasId] ?? 0)) {
                            $kelas->update(['terisi' => $taken]);
                        }
                    }
                }
            });
        } catch (\Throwable $e) {
            return back()->withErrors(['db_error' => 'Gagal menyimpan data ke database: ' . $e->getMessage()]);
        }

        return redirect()->route('mahasiswa.krs');
    }

    public function destroy(Request $request) {
        $mahasiswa = $request->user()->mahasiswa;
        $activePeriod = TahunAkademik::where('status_aktif', 1)->first();
        if (!$activePeriod) {
            return back()->withErrors(['krs' => 'Tidak ada periode aktif.']);
        }
        $krs = Krs::where('mahasiswa_nrp', $mahasiswa->nrp)
            ->where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)
            ->with('detailKrs')
            ->first();
        if (!$krs) {
            return back()->withErrors(['krs' => 'KRS tidak ditemukan.']);
        }
        if ($krs->status_persetujuan != 0) {
            return back()->withErrors(['krs' => 'KRS yang sudah disetujui / ditolak tidak dapat dibatalkan.']);
        }
        try {
            DB::transaction(function () use ($krs) {
                $kelasIds = $krs->detailKrs->pluck('kelas_id_kelas')->toArray();
                $krs->detailKrs()->delete();
                $krs->delete();
                if (!empty($kelasIds)) {
                    $counts = DetailKrs::select('kelas_id_kelas', DB::raw('COUNT(*) as jumlah'))
                        ->whereIn('kelas_id_kelas', $kelasIds)
                        ->groupBy('kelas_id_kelas')
                        ->pluck('jumlah', 'kelas_id_kelas');
                    foreach ($kelasIds as $kelasId) {
                        Kelas::where('id_kelas', $kelasId)->update([
                            'terisi' => $counts[$kelasId] ?? 0,
                        ]);
                        
                        $kelas = Kelas::find($kelasId);
                        $taken = $counts[$kelasId] ?? 0;
                        if ($kelas && $taken < ($kelas->kapasitas ?? 0)) {
                            $next = KelasWaitlist::where('kelas_id_kelas', $kelasId)
                                ->orderBy('created_at')
                                ->first();
                            if ($next) {
                                $activePeriod = TahunAkademik::where('status_aktif', 1)->first();
                                if ($activePeriod) {
                                    $krsPromote = Krs::firstOrCreate(
                                        [
                                            'mahasiswa_nrp' => $next->mahasiswa_nrp,
                                            'tahun_akademik_id_tahun_akademik' => $kelas->tahun_akademik_id_tahun_akademik,
                                        ],
                                        [
                                            'id_krs' => str_replace('-', '', (string) Str::uuid()),
                                            'status_persetujuan' => 0,
                                            'tanggal_pengajuan' => now(),
                                            'semester' => Mahasiswa::find($next->mahasiswa_nrp)?->semester ?? 1,
                                        ]
                                    );
                                    DetailKrs::create([
                                        'id_detail_krs' => str_replace('-', '', (string) Str::uuid()),
                                        'krs_id_krs' => $krsPromote->id_krs,
                                        'kelas_id_kelas' => $kelasId,
                                    ]);
                                    $next->delete();
                                    $newTaken = DetailKrs::where('kelas_id_kelas', $kelasId)->count();
                                    $kelas->update(['terisi' => $newTaken]);
                                }
                            }
                        }
                    }
                }
            });
        } catch (\Throwable $e) {
            return back()->withErrors(['krs' => 'Gagal membatalkan KRS: ' . $e->getMessage()]);
        }
        return redirect()->route('mahasiswa.krs');
    }
}