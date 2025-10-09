<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;

function grs($length = 10) {
    $characters = '0123456789';
    $string = '';

    for ($i = 0; $i < $length; $i++) {
        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return $string;
}

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * This seeder contains mock data for dosen (lecturers) across all study programs
     * at Institut Teknologi Sepuluh Nopember (ITS).
     * 
     * Total: 136 dosen across 34 study programs
     * - 4 dosen per program
     * - Covers all 6 faculties: FSAD, FTIRS, FTSPK, FTK, FTEIC, FDKBD
     * - Default password for all users: 'password'
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {

            // Fisika (5001) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Santoso, S.Si., M.Si.',
                'program_studi_id_prodi' => '5001',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rini Utami, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5001',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Dian Pratiwi, S.T., M.T.',
                'program_studi_id_prodi' => '5001',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Arif Wibowo, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5001',
            ]);


            // Matematika (5002) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Susilo',
                'program_studi_id_prodi' => '5002',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rini Wulandari, S.T., M.T.',
                'program_studi_id_prodi' => '5002',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Eng. Pramudra Wijaya',
                'program_studi_id_prodi' => '5002',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.T., M.T. Budi Santoso, Ph.D.',
                'program_studi_id_prodi' => '5002',
            ]);


            // Statistika (5003) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ahmad Fauzi, S.Kom., M.T.',
                'program_studi_id_prodi' => '5003',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Suryanto, Dr.',
                'program_studi_id_prodi' => '5003',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Nurul Aini, S.Si., M.Si.',
                'program_studi_id_prodi' => '5003',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Eko Pramudra, S.T., M.T.',
                'program_studi_id_prodi' => '5003',
            ]);


            // Kimia (5004) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Budi Santoso, S.T., M.T.',
                'program_studi_id_prodi' => '5004',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Ratih Puspita, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5004',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ahmad Fauzi, S.Si., M.Si.',
                'program_studi_id_prodi' => '5004',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.T., M.T., Ph.D. Dr. Ir. Iwan Kartiko, M.T.',
                'program_studi_id_prodi' => '5004',
            ]);


            // Biologi (5005) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Andi Prasetyo, S.Kom., M.T.',
                'program_studi_id_prodi' => '5005',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rini Aisyah, S.Si., M.Si.',
                'program_studi_id_prodi' => '5005',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ahmad Fauzi, S.T., M.T., Ph.D.',
                'program_studi_id_prodi' => '5005',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Sri Rahayu, M.Kom., S.Kom.',
                'program_studi_id_prodi' => '5005',
            ]);


            // Aktuaria (5006) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Santoso S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5006',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Ratna Wulandari S.Si., M.Si.',
                'program_studi_id_prodi' => '5006',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Enny Putri S.T., M.T.',
                'program_studi_id_prodi' => '5006',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Budi Prasetyo S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5006',
            ]);


            // Teknik Mesin (5007) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Andi Prakoso, S.T., M.T.',
                'program_studi_id_prodi' => '5007',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rina Widyastuti, S.T., M.T., Ph.D.',
                'program_studi_id_prodi' => '5007',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dra. Lestari Purnama, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5007',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Eng. Budi Santoso, S.Si., M.T.',
                'program_studi_id_prodi' => '5007',
            ]);


            // Teknik Kimia (5008) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ahmad Yusuf, S.T., M.T.',
                'program_studi_id_prodi' => '5008',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rina Lestari, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5008',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Dwi Prakoso, S.Si., M.Si.',
                'program_studi_id_prodi' => '5008',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Sri Kusumawardani, S.T., M.T.',
                'program_studi_id_prodi' => '5008',
            ]);


            // Teknik Fisika (5009) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Budi Santoso',
                'program_studi_id_prodi' => '5009',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Rini Astuti',
                'program_studi_id_prodi' => '5009',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.T., M.T. Raka Prasetya',
                'program_studi_id_prodi' => '5009',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.Kom., M.Kom. Linda Handayani',
                'program_studi_id_prodi' => '5009',
            ]);


            // Teknik Sistem dan Industri (5010) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Santoso, M.T.',
                'program_studi_id_prodi' => '5010',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Linda Rahmawati, S.T., M.T.',
                'program_studi_id_prodi' => '5010',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Fajar Pratama, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5010',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.T., M.T., Ph.D. Rini Widyastuti, Dr.',
                'program_studi_id_prodi' => '5010',
            ]);


            // Teknik Material dan Metalurgi (5011) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ahmad Fikri, S.T., M.T.',
                'program_studi_id_prodi' => '5011',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rini Puspita, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5011',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Pratama, S.Si., M.T.',
                'program_studi_id_prodi' => '5011',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Lilis Suryani, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5011',
            ]);


            // Teknik Sipil (5012) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ir. Budi Santoso, MT',
                'program_studi_id_prodi' => '5012',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rini Wardani, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5012',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Prasetyo, S.Si., M.Si.',
                'program_studi_id_prodi' => '5012',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.T., M.T. Lilis Puspita, M.Kom.',
                'program_studi_id_prodi' => '5012',
            ]);


            // Arsitektur (5013) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Andi Prasetyo',
                'program_studi_id_prodi' => '5013',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rina Wijaya',
                'program_studi_id_prodi' => '5013',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.T., M.T. Budi Santoso',
                'program_studi_id_prodi' => '5013',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.Kom., M.Kom. Nadia Lestari',
                'program_studi_id_prodi' => '5013',
            ]);


            // Teknik Lingkungan (5014) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Widodo, M.T.',
                'program_studi_id_prodi' => '5014',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => ' Prof. Dr. Rini Lestari, S.T., M.T., Ph.D.',
                'program_studi_id_prodi' => '5014',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Iwan Pratama, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5014',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ratu Ayu S. S.Si., M.Si.',
                'program_studi_id_prodi' => '5014',
            ]);


            // Perencanaan Wilayah dan Kota (5015) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ahmad Fauzi, S.Kom., M.T.',
                'program_studi_id_prodi' => '5015',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rini Wulandari, S.Si., M.Si.',
                'program_studi_id_prodi' => '5015',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Eng. Budi Santoso, M.T.',
                'program_studi_id_prodi' => '5015',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.T., M.T. Lestari Purnama, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5015',
            ]);


            // Teknik Geomatika (5016) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Santoso, S.T., M.T.',
                'program_studi_id_prodi' => '5016',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rini Wulandari, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5016',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Andi Prasetyo, S.Si., M.Si.',
                'program_studi_id_prodi' => '5016',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Sri Pujiastuti, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5016',
            ]);


            // Teknik Geofisika (5017) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Ir. Nugroho Santoso, M.Eng.',
                'program_studi_id_prodi' => '5017',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Hadi Pranoto, M.Kom.',
                'program_studi_id_prodi' => '5017',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.T., M.T. Aulia Rahman, S.T., M.T.',
                'program_studi_id_prodi' => '5017',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Eng. Rini Utami, S.T., M.T.',
                'program_studi_id_prodi' => '5017',
            ]);


            // Teknik Perkapalan (5018) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Prabowo, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5018',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Ratna Kusuma, S.T., M.T., Ph.D.',
                'program_studi_id_prodi' => '5018',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Rudi Hartono, S.Si., M.Si.',
                'program_studi_id_prodi' => '5018',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Indah Lestari, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5018',
            ]);


            // Teknik Sistem Perkapalan (5019) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ahmad Fauzi, S.T., M.T.',
                'program_studi_id_prodi' => '5019',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rani Puspita, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5019',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Hendra Wijaya, S.Si., M.T.',
                'program_studi_id_prodi' => '5019',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dra. Intan Wibisono, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5019',
            ]);


            // Teknik Kelautan (5020) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Arif Rahman, S.T., M.T.',
                'program_studi_id_prodi' => '5020',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Suryani Wibowo, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5020',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ahmad Fauzi, S.Si., M.T.',
                'program_studi_id_prodi' => '5020',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Rina Marlina, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5020',
            ]);


            // Teknik Transportasi Laut (5021) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Andika Pratama, S.T., M.T.',
                'program_studi_id_prodi' => '5021',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rini Susanti, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5021',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Wicaksono, S.Si., M.Si.',
                'program_studi_id_prodi' => '5021',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Budi Utomo, S.T., M.T.',
                'program_studi_id_prodi' => '5021',
            ]);


            // Teknik Elektro (5022) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ahmad Fauzi, S.T., M.T.',
                'program_studi_id_prodi' => '5022',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rina Setiawati, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5022',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Angga Pratama, S.Si., M.Si.',
                'program_studi_id_prodi' => '5022',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.T., M.T., Ph.D. Budi Santoso, Dr.',
                'program_studi_id_prodi' => '5022',
            ]);


            // Teknik Biomedik (5023) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Ahmad Rachman, S.T., M.T., Ph.D.',
                'program_studi_id_prodi' => '5023',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Sari Indah, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5023',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Pramono, S.Si., M.Si.',
                'program_studi_id_prodi' => '5023',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Lestari Hartono, S.Kom., M.T.',
                'program_studi_id_prodi' => '5023',
            ]);


            // Teknik Komputer (5024) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Arif Rachman, S.T., M.T.',
                'program_studi_id_prodi' => '5024',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Dewi Lestari, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5024',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Hadi Pranoto, S.Si., M.Si.',
                'program_studi_id_prodi' => '5024',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Ibu Ratu Dwi, S.T., M.T., Ph.D.',
                'program_studi_id_prodi' => '5024',
            ]);


            // Teknik Informatika (5025) - 4 dosen
            $nidn = '0012345678';
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Indah Wijayanti',
                'program_studi_id_prodi' => '5025',
            ]);

            $nidn = '0023047501';
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Budi Santoso',
                'program_studi_id_prodi' => '5025',
            ]);

            $nidn = '0015088202';
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Citra Lestari',
                'program_studi_id_prodi' => '5025',
            ]);

            $nidn = '0010118803';
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Ahmad Maulana, S.Kom., M.T.',
                'program_studi_id_prodi' => '5025',
            ]);

            // Sistem Informasi (5026) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ir. Budi Santoso, MT',
                'program_studi_id_prodi' => '5026',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Ani Pramudari, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5026',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Rini Sutanto, S.Si., M.Si.',
                'program_studi_id_prodi' => '5026',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Mohammad Fajar, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5026',
            ]);


            // Teknologi Informasi (5027) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Suharto, S.Kom., M.T.',
                'program_studi_id_prodi' => '5027',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Ratna Dewi, S.T., M.T., Ph.D.',
                'program_studi_id_prodi' => '5027',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Iwan Prasetyo, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5027',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Eka Widiastuti, S.T., M.T.',
                'program_studi_id_prodi' => '5027',
            ]);


            // Desain Produk (5028) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Andi Saputra, S.T., M.T.',
                'program_studi_id_prodi' => '5028',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rina Yulianti, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5028',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ali Fahmi, S.Si., M.T.',
                'program_studi_id_prodi' => '5028',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Nia Lestari, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5028',
            ]);


            // Desain Interior (5029) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Santoso, S.T., M.T.',
                'program_studi_id_prodi' => '5029',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rina Kelas, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5029',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Dwi Setiawan, S.Si., M.Si.',
                'program_studi_id_prodi' => '5029',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Surya Wijaya, S.Kom., M.T.',
                'program_studi_id_prodi' => '5029',
            ]);


            // Desain Komunikasi Visual (5030) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Widodo, S.Kom., M.T.',
                'program_studi_id_prodi' => '5030',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rini Marlina, S.Si., M.Si.',
                'program_studi_id_prodi' => '5030',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ir. Hadi Prasetya, M.Kom.',
                'program_studi_id_prodi' => '5030',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'S.T., M.T. Budi Santoso, S.T., M.T.',
                'program_studi_id_prodi' => '5030',
            ]);


            // Manajemen Bisnis (5031) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rahayu Widyastuti, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5031',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Ahmad Fauzi, S.T., M.T., Ph.D.',
                'program_studi_id_prodi' => '5031',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Sri Lestari, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5031',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Nugroho Prakoso, Dr. Eng.',
                'program_studi_id_prodi' => '5031',
            ]);


            // Studi Pembangunan (5033) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Bambang Suharto, S.T., M.T.',
                'program_studi_id_prodi' => '5033',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Rini Marliana, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5033',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Eng. Arief Prabowo, S.T., M.T.',
                'program_studi_id_prodi' => '5033',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Lina Wibowo, S.Si., M.T.',
                'program_studi_id_prodi' => '5033',
            ]);


            // Teknik Pangan (5045) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rina Widyastuti, S.T., M.T.',
                'program_studi_id_prodi' => '5045',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Prasetyo, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5045',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Intan Maharani, S.Si., M.Si.',
                'program_studi_id_prodi' => '5045',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Dwi Santoso, S.T., M.T.',
                'program_studi_id_prodi' => '5045',
            ]);


            // Teknik Bangunan Lepas Pantai (5046) - 4 dosen
            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Agus Wirahadi, S.T., M.T.',
                'program_studi_id_prodi' => '5046',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Prof. Dr. Rini Hastuti, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5046',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Arif Susanto, S.Si., M.Si.',
                'program_studi_id_prodi' => '5046',
            ]);

            $nidn = grs();
            $dosenUser = User::create([
                'email' => $nidn . '@its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $dosenUser->id,
                'nidn' => $nidn,
                'nama_dosen' => 'Dr. Taufik Rahman, S.Kom., M.Kom.',
                'program_studi_id_prodi' => '5046',
            ]);

            $mahasiswaUser = User::create([
                'email' => '5025241127@student.its.ac.id',
                'password' => Hash::make('password'),
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
                'dosen_nidn' => '0010118803',
            ]);

            $mahasiswaUser2 = User::create([
                'email' => '5025241004@student.its.ac.id',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
            ]);

            Mahasiswa::create([
                'user_id' => $mahasiswaUser2->id,
                'nrp' => '5025241004',
                'nama' => 'Razan Widya Reswara',
                'angkatan' => 2024,
                'semester' => 3,
                'status_mahasiswa' => 'Aktif',
                'program_studi_id_prodi' => '5025',
                'dosen_nidn' => '0010118803',
            ]);

        });

        $this->command->info('Successfully seeded ' . User::where('role', 'dosen')->count() . ' dosen users for all ITS study programs.');
    }
}
