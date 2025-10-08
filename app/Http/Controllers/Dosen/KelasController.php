<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\TahunAkademik;
use App\Models\Kelas;
use Illuminate\Support\Collection;

class KelasController extends Controller {
    public function index(Request $request): Response {
        $dosen = $request->user()->dosen;
        $activePeriod = TahunAkademik::where('status_aktif', 1)->first();
        
        $classes = new Collection();
        $stats = [
            'totalClasses' => 0,
            'totalStudents' => 0,
            'avgCapacity' => 0,
        ];

        if ($activePeriod) {
            $classes = Kelas::where('dosen_nidn', $dosen->nidn)
                ->where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)
                ->with(['matakuliah', 'ruangan'])
                ->get();

            if ($classes->isNotEmpty()) {
                $totalCapacity = $classes->sum('kapasitas');
                $totalEnrolled = $classes->sum('terisi');

                $stats = [
                    'totalClasses' => $classes->count(),
                    'totalStudents' => $totalEnrolled,
                    'avgCapacity' => $totalCapacity > 0 ? round(($totalEnrolled / $totalCapacity) * 100) : 0,
                ];
            }
        }

        return Inertia::render('dosen/Kelas', [
            'classes' => $classes,
            'stats' => $stats,
            'activePeriod' => $activePeriod,
        ]);
    }
}