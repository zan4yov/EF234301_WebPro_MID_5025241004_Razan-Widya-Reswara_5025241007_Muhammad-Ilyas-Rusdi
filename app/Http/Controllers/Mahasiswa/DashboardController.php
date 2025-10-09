<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\TahunAkademik;
use Carbon\Carbon;

class DashboardController extends Controller {
    public function index(Request $request): Response {
        $mahasiswa = Mahasiswa::with(['programStudi', 'dosenPembimbing'])
            ->findOrFail($request->user()->mahasiswa->nrp);

        $activePeriod = TahunAkademik::where('status_aktif', 1)->first();
        
        $currentKrs = null;
        $todaySchedule = [];
        $dosen = [];

        if ($activePeriod) {
            $currentKrs = $mahasiswa->krs()
                ->where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)
                ->with(['detailKrs.kelas.matakuliah', 'detailKrs.kelas.ruangan'])
                ->first();

            if ($currentKrs) {
                $currentKrs->total_sks = $currentKrs->detailKrs->reduce(function ($carry, $detail) {
                    $sks = optional(optional($detail->kelas)->matakuliah)->sks ?? 0;
                    return $carry + $sks;
                }, 0);
                
                if ($currentKrs->status_persetujuan === 1) {
                    $dayOfWeek = Carbon::now()->dayOfWeekIso;
                    $todaySchedule = $currentKrs->detailKrs
                        ->map(function ($detail) {
                            return optional($detail)->kelas;
                        })
                        ->filter()
                        ->filter(function ($kelas) use ($dayOfWeek) {
                            if (!$kelas || !$kelas->jam_mulai) return false;
                            $start = Carbon::parse($kelas->jam_mulai);
                            return $start->dayOfWeekIso === $dayOfWeek;
                        })
                        ->sortBy(function ($kelas) {
                            return $kelas->jam_mulai ?? null;
                        })
                        ->take(3)
                        ->values()
                        ->all();

                    $dosen = Dosen::whereIn('nidn', collect($todaySchedule)
                    ->pluck('dosen_nidn')
                    ->filter()
                    ->unique()
                    ->values()
                    ->all())
                    ->get();
                }
            }
        }
        
        return Inertia::render('mahasiswa/Dashboard', [
            'mahasiswa' => $mahasiswa,
            'currentKrs' => $currentKrs,
            'activePeriod' => $activePeriod,
            'todaySchedule' => $todaySchedule,
            'dosen' => $dosen,
        ]);
    }
}