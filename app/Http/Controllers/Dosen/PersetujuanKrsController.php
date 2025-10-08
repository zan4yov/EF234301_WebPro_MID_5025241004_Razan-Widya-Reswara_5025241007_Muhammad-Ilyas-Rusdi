<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Krs;
use App\Models\TahunAkademik;
use App\Models\DetailKrs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;

class PersetujuanKrsController extends Controller {
    public function index(Request $request): Response {
        $dosen = $request->user()->dosen;
        $activePeriod = TahunAkademik::where('status_aktif', 1)->first();

        $mahasiswaNrp = $dosen->bimbinganMahasiswa()->pluck('nrp');

        $allKrs = collect();
        if ($activePeriod) {
            $allKrs = Krs::whereIn('mahasiswa_nrp', $mahasiswaNrp)
                ->where('tahun_akademik_id_tahun_akademik', $activePeriod->id_tahun_akademik)
                ->with([
                    'mahasiswa:nrp,nama,semester',
                    'detailKrs.kelas.matakuliah',
                    'detailKrs.kelas.dosen:nidn,nama_dosen',
                    'detailKrs.kelas.ruangan:id_ruangan,tempat_ruangan',
                ])
                ->latest('tanggal_pengajuan')
                ->get();
            
            $allKrs->each(fn ($krs) => 
                $krs->total_sks = $krs->detailKrs->sum('kelas.matakuliah.sks')
            );
        }
        
        $stats = [
            'pending' => $allKrs->where('status_persetujuan', 0)->count(),
            'approved' => $allKrs->where('status_persetujuan', 1)->count(),
            'rejected' => $allKrs->where('status_persetujuan', 2)->count(),
        ];

        return Inertia::render('dosen/PersetujuanKRS', [
            'allKrs' => $allKrs,
            'stats' => $stats,
        ]);
    }

    public function approve(Krs $krs): RedirectResponse {

        $krs->update(['status_persetujuan' => 1]);

        return redirect()->back()->with('message', "KRS untuk {$krs->mahasiswa->nama} berhasil disetujui.");
    }

    public function reject(Request $request, Krs $krs): RedirectResponse {

        $request->validate(['catatan' => 'required|string|max:255']);

        $krs->update([
            'status_persetujuan' => 2,
            'catatan_penolakan' => $request->catatan,
        ]);

        return redirect()->back()->with('message', "KRS untuk {$krs->mahasiswa->nama} berhasil ditolak.");
    }

    public function updateNilai(Request $request, DetailKrs $detailKrs): RedirectResponse {
        $request->validate([
            'nilai_huruf' => 'required|in:A,AB,B,BC,C,D,E'
        ]);

        $dosen = $request->user()->dosen;
        $krs = $detailKrs->krs()->with('mahasiswa')->first();
        if ($dosen && !$dosen->bimbinganMahasiswa()->where('nrp', $krs->mahasiswa_nrp)->exists()) {
            return back()->withErrors(['nilai' => 'Anda tidak berwenang mengubah nilai untuk mahasiswa ini.']);
        }

        $detailKrs->update(['nilai_huruf' => $request->nilai_huruf]);

        return back()->with('message', 'Nilai berhasil diperbarui.');
    }
}