<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\TahunAkademik;

class JadwalController extends Controller {
    public function index(Request $request): Response {
        $mahasiswa = $request->user()->mahasiswa;
        $activePeriod = TahunAkademik::where('status_aktif', 1)->first();
        $schedule = [];

        if ($activePeriod) {
            $krs = $mahasiswa->krs()
                ->where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)
                ->where('status_persetujuan', 1)
                ->first();

            if ($krs) {
                $schedule = $krs->detailKrs()->with([
                    'kelas.matakuliah',
                    'kelas.dosen',
                    'kelas.ruangan'
                ])->get();
            }
        }

        return Inertia::render('mahasiswa/Jadwal', [
            'schedule' => $schedule,
            'activePeriod' => $activePeriod,
        ]);
    }
}