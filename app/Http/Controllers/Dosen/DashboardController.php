<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\TahunAkademik;
use App\Models\Kelas;
use App\Models\Krs;
use Carbon\Carbon;

class DashboardController extends Controller {
    public function index(Request $request): Response {
        $dosen = $request->user()->dosen()->with('programStudi')->firstOrFail();
        $activePeriod = TahunAkademik::where('status_aktif', 1)->first();
        $mahasiswaNrp = $dosen->bimbinganMahasiswa()->pluck('nrp');

        $pendingKrs = collect();
        if ($activePeriod) {
            $pendingKrs = Krs::whereIn('mahasiswa_nrp', $mahasiswaNrp)
                ->where('status_persetujuan', 0)
                ->where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)
                ->with(['mahasiswa:nrp,nama', 'detailKrs.kelas.matakuliah:kode_mk,sks'])
                ->latest('tanggal_pengajuan')
                ->get();
            
            $pendingKrs->each(function ($krs) {
                $krs->total_sks = $krs->detailKrs->sum('kelas.matakuliah.sks');
            });
        }
        
        $todaySchedule = collect();
        if ($activePeriod) {
            $todayWeekdayIso = Carbon::now()->dayOfWeekIso;
            $allTeaching = Kelas::where('dosen_nidn', $dosen->nidn)
                ->where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)
                ->with(['matakuliah:kode_mk,nama_mk', 'ruangan:id_ruangan,tempat_ruangan'])
                ->get();

            $todaySchedule = $allTeaching
                ->filter(function ($kelas) use ($todayWeekdayIso) {
                    try {
                        return Carbon::parse($kelas->jam_mulai)->dayOfWeekIso === $todayWeekdayIso;
                    } catch (\Throwable $e) {
                        return false;
                    }
                })
                ->sortBy('jam_mulai')
                ->values();
        }

        $stats = [
            'mahasiswaBimbinganCount' => $dosen->bimbinganMahasiswa()->count(),
            'pendingKrsCount' => $pendingKrs->count(),
            'kelasDiampuCount' => $activePeriod ? Kelas::where('dosen_nidn', $dosen->nidn)->where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)->count() : 0,
            'todayScheduleCount' => $todaySchedule->count(),
        ];
        
        return Inertia::render('dosen/Dashboard', [
            'dosen' => $dosen,
            'stats' => $stats,
            'pendingKrs' => $pendingKrs->take(5),
            'todaySchedule' => $todaySchedule,
            'mahasiswaBimbingan' => $dosen->bimbinganMahasiswa()->orderBy('nrp', 'desc')->take(5)->get(),
        ]);
    }
}