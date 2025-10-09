<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::transaction(function () {
            // Dosen 1
            $nidn1 = '0012345678';
            $dosenUser1 = User::create([
                'email' => $nidn1 . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser1->id,
                'nidn' => $nidn1,
                'nama_dosen' => 'Dr. Indah Wijayanti',
                'program_studi_id_prodi' => '5025',
            ]);

            // Dosen 2
            $nidn2 = '0023047501';
            $dosenUser2 = User::create([
                'email' => $nidn2 . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser2->id,
                'nidn' => $nidn2,
                'nama_dosen' => 'Prof. Dr. Budi Santoso',
                'program_studi_id_prodi' => '5025',
            ]);

            // Dosen 3
            $nidn3 = '0015088202';
            $dosenUser3 = User::create([
                'email' => $nidn3 . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser3->id,
                'nidn' => $nidn3,
                'nama_dosen' => 'Dr. Citra Lestari',
                'program_studi_id_prodi' => '5025',
            ]);

            // Dosen 4
            $nidn4 = '0010118803';
            $dosenUser4 = User::create([
                'email' => $nidn4 . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser4->id,
                'nidn' => $nidn4,
                'nama_dosen' => 'Ahmad Maulana, S.Kom., M.T.',
                'program_studi_id_prodi' => '5025',
            ]);

            $mahasiswaUser = User::create([
                'email' => '5025241127@its.ac.id',
                'password' => Hash::make('Moch1234!'),
                'role' => 'mahasiswa',
            ]);

            Mahasiswa::create([
                'user_id' => $mahasiswaUser->id,
                'nrp' => '5025241127',
                'nama' => 'Mochammad Irfan Sandy',
                'angkatan' => 2024,
                'semester' => 3,
                'status_mahasiswa' => 'Aktif',
                'program_studi_id_prodi' => '5025',
                'dosen_nidn' => $nidn4,
            ]);

            $mahasiswaUser2 = User::create([
                'email' => '5025241000@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
            ]);

            Mahasiswa::create([
                'user_id' => $mahasiswaUser2->id,
                'nrp' => '5025241000',
                'nama' => 'Test Queue',
                'angkatan' => 2024,
                'semester' => 3,
                'status_mahasiswa' => 'Aktif',
                'program_studi_id_prodi' => '5025',
                'dosen_nidn' => $nidn4,
            ]);
        });
    }
}
