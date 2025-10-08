<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\DetailKrs;

class NilaiController extends Controller {
    public function index(Request $request): Response {
        $mahasiswa = $request->user()->mahasiswa;
        $allGrades = DetailKrs::whereHas('krs', function ($query) use ($mahasiswa) {
            $query->where('mahasiswa_nrp', $mahasiswa->nrp);
        })
            ->with(['krs', 'kelas.matakuliah', 'kelas.tahunAkademik'])
            ->get();

        $gradesBySemester = $allGrades->groupBy(function ($grade) {
            $krsSemester = optional($grade->krs)->semester;
            if (!is_null($krsSemester) && $krsSemester !== '') {
                return $krsSemester;
            }
            return optional(optional(optional($grade->kelas)->tahunAkademik))->semester ?? 'unknown';
        });

        $availableSemesters = $gradesBySemester->keys()
            ->filter(fn ($k) => $k !== 'unknown')
            ->map(fn ($k) => (int)$k)
            ->sort()
            ->values();

        $graded = $allGrades->filter(fn ($g) => !is_null($g->nilai_huruf));
        $totalSks = 0;
        $totalBobot = 0;
        foreach ($graded as $grade) {
            $sks = optional(optional($grade->kelas)->matakuliah)->sks ?? 0;
            if ($sks <= 0) {
                continue;
            }
            $bobot = $this->gradeToValue($grade->nilai_huruf) * $sks;
            $totalSks += $sks;
            $totalBobot += $bobot;
        }
        $ipk = $totalSks > 0 ? round($totalBobot / $totalSks, 4) : 0;

        $selectedSemester = $request->query('semester', 'all');
        $filteredGrades = $allGrades;
        
        if ($selectedSemester !== 'all' && $gradesBySemester->has((int)$selectedSemester)) {
            $filteredGrades = $gradesBySemester[(int)$selectedSemester];
        }

        $ipsSet = $selectedSemester === 'all'
            ? $graded
            : $filteredGrades->filter(fn ($g) => !is_null($g->nilai_huruf));

        $ipsTotalSks = 0;
        $ipsTotalBobot = 0;
        foreach ($ipsSet as $grade) {
            $sks = optional(optional($grade->kelas)->matakuliah)->sks ?? 0;
            if ($sks <= 0) {
                continue;
            }
            $bobot = $this->gradeToValue($grade->nilai_huruf) * $sks;
            $ipsTotalSks += $sks;
            $ipsTotalBobot += $bobot;
        }
        $ips = $ipsTotalSks > 0 ? round($ipsTotalBobot / $ipsTotalSks, 4) : 0;
        
        return Inertia::render('mahasiswa/Nilai', [
            'grades' => $filteredGrades->values(),
            'ipk' => $ipk,
            'ips' => $ips,
            'availableSemesters' => $availableSemesters,
            'selectedSemester' => $selectedSemester,
        ]);
    }
    
    private function gradeToValue(?string $grade): float
    {
        $map = [
            'A' => 4.0, 'AB' => 3.5, 'B' => 3.0, 'BC' => 2.5, 'C' => 2.0,
            'D' => 1.0, 'E' => 0.0
        ];
        if (!$grade) {
            return 0.0;
        }
        return $map[$grade] ?? 0.0;
    }
}