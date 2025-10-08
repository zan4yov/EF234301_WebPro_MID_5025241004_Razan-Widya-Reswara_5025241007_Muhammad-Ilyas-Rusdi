<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\TahunAkademik;
use App\Models\Kelas;

class JadwalController extends Controller {
    public function index(Request $request): Response {
        $dosen = $request->user()->dosen;
        $activePeriod = TahunAkademik::where('status_aktif', 1)->first();
        $schedule = [];

        if ($activePeriod) {
            $schedule = Kelas::where('dosen_nidn', $dosen->nidn)
                ->where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)
                ->with(['matakuliah', 'ruangan'])
                ->get();
        }

        return Inertia::render('dosen/Jadwal', [
            'schedule' => $schedule,
            'activePeriod' => $activePeriod,
        ]);
    }
}