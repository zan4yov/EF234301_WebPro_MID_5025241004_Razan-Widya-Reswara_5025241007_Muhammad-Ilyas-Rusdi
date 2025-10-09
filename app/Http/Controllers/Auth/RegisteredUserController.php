<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\ProgramStudi;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller {
    public function create(): Response {
        $programStudis = ProgramStudi::orderBy('nama_prodi', 'asc')->get();
        $dosen = Dosen::orderBy('nama_dosen', 'asc')->get();

        return Inertia::render('Signup', [
            'programStudis' => $programStudis,
            'listDosen' => $dosen,
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
            'role' => ['required', Rule::in(['mahasiswa', 'dosen'])],
            'nrp' => ['nullable', 'string', 'max:10', 'unique:' . Mahasiswa::class, 'required_if:role,mahasiswa'],
            'nidn' => ['nullable', 'string', 'max:10', 'unique:' . Dosen::class, 'required_if:role,dosen'],
            'telp' => ['required', 'string', 'max:16'],
            'prodi' => ['required', 'string', Rule::exists('program_studi', 'id_prodi')],
            'dosen_nidn' => ['required', 'string', 'max:10', 'required_if:role,mahasiswa', Rule::notIn('none')],
        ]);

        try {
            DB::transaction(function () use ($request) {
                $user = User::create([
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role' => $request->role,
                ]);

                if ($request->role === 'mahasiswa') {
                    Mahasiswa::create([
                        'user_id' => $user->id,
                        'nrp' => $request->nrp,
                        'nama' => $request->name,
                        'no_telepon' => $request->telp,
                        'program_studi_id_prodi' => $request->prodi,
                        'angkatan' => now()->year,
                        'semester' => 5,
                        'status_mahasiswa' => 'Aktif',
                        'dosen_nidn' => $request->dosen_nidn,
                    ]);
                } else if ($request->role === 'dosen') {
                    Dosen::create([
                        'user_id' => $user->id,
                        'nidn' => $request->nidn,
                        'nama_dosen' => $request->name,
                        'no_telepon_dosen' => $request->telp,
                        'program_studi_id_prodi' => $request->prodi,
                    ]);
                }

                Auth::login($user);
            });
        } catch (\Throwable $e) {
            return back()->withErrors(['db_error' => 'Gagal menyimpan data ke database: ' . $e->getMessage()]);
        }

        if ($request->role === 'dosen') {
            return redirect('/dosen/dashboard');
        }
        return redirect('/mahasiswa/dashboard');
    }
}
