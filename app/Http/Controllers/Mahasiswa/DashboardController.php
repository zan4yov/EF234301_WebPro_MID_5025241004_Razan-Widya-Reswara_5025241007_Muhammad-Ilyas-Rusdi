<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
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

                $dayOfWeek = Carbon::now()->dayOfWeekIso;
                $todaySchedule = $currentKrs->detailKrs
                    ->filter(function ($detail) use ($dayOfWeek) {
                        return optional($detail->kelas)->hari == $dayOfWeek;
                    })
                    ->take(3)
                    ->values()
                    ->all();
            }
        }
        
        return Inertia::render('mahasiswa/Dashboard', [
            'mahasiswa' => $mahasiswa,
            'currentKrs' => $currentKrs,
            'activePeriod' => $activePeriod,
            'todaySchedule' => $todaySchedule,
        ]);
    }
}