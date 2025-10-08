<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // <-- Tambahkan ini
use Inertia\Inertia;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Mahasiswa\DashboardController as MahasiswaDashboardController;
use App\Http\Controllers\Mahasiswa\KrsController as MahasiswaKrsController;
use App\Http\Controllers\Mahasiswa\JadwalController as MahasiswaJadwalController;
use App\Http\Controllers\Mahasiswa\NilaiController as MahasiswaNilaiController;
use App\Http\Controllers\Dosen\DashboardController as DosenDashboardController;
use App\Http\Controllers\Dosen\PersetujuanKrsController as DosenPersetujuanKrsController;
use App\Http\Controllers\Dosen\KelasController as DosenKelasController;
use App\Http\Controllers\Dosen\JadwalController as DosenJadwalController;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/signup', [RegisteredUserController::class, 'create'])->name('signup');
Route::post('/signup', [RegisteredUserController::class, 'store']);

Route::middleware(['auth', 'role:mahasiswa'])->prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/dashboard', [MahasiswaDashboardController::class, 'index'])->name('dashboard');
    Route::get('/krs', [MahasiswaKrsController::class, 'index'])->name('krs');
    Route::post('/krs', [MahasiswaKrsController::class, 'store'])->name('krs.store');
    Route::delete('/krs', [MahasiswaKrsController::class, 'destroy'])->name('krs.destroy');
    Route::get('/jadwal', [MahasiswaJadwalController::class, 'index'])->name('jadwal');
    Route::get('/nilai', [MahasiswaNilaiController::class, 'index'])->name('nilai');
});

Route::middleware(['auth', 'role:dosen'])->prefix('dosen')->name('dosen.')->group(function () {
    Route::get('/dashboard', [DosenDashboardController::class, 'index'])->name('dashboard');
    Route::get('/persetujuan', [DosenPersetujuanKrsController::class, 'index'])->name('persetujuan');
    Route::patch('/persetujuan/{krs}/approve', [DosenPersetujuanKrsController::class, 'approve'])->name('persetujuan.approve');
    Route::patch('/persetujuan/{krs}/reject', [DosenPersetujuanKrsController::class, 'reject'])->name('persetujuan.reject');
    Route::patch('/persetujuan/detail-krs/{detailKrs}', [DosenPersetujuanKrsController::class, 'updateNilai'])->name('persetujuan.updateNilai');
    Route::get('/kelas', [DosenKelasController::class, 'index'])->name('kelas');
    Route::get('/jadwal', [DosenJadwalController::class, 'index'])->name('jadwal');
});

$dynamicRedirect = function () {
    if (Auth::check()) {
        $role = Auth::user()->role;
        if ($role === 'mahasiswa') {
            return redirect()->route('mahasiswa.dashboard');
        } elseif ($role === 'dosen') {
            return redirect()->route('dosen.dashboard');
        }
    }
    return redirect()->route('login');
};

Route::get('/', $dynamicRedirect);
Route::fallback($dynamicRedirect);
