<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramStudiSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $fsad = 'Fakultas Sains dan Analitika Data';
        $ftirs = 'Fakultas Teknologi Industri dan Rekayasa Sistem';
        $ftspk = 'Fakultas Teknik Sipil, Perencanaan, dan Kebumian';
        $ftk = 'Fakultas Teknologi Kelautan';
        $fteic = 'Fakultas Teknologi Elektro dan Informatika Cerdas';
        $fdkbd = 'Fakultas Desain Kreatif dan Bisnis Digital';

        $prodi = [
            // Fakultas Sains dan Analitika Data (FSAD)
            ['id_prodi' => '5001', 'nama_prodi' => 'Fisika', 'nama_fakultas' => $fsad],
            ['id_prodi' => '5002', 'nama_prodi' => 'Matematika', 'nama_fakultas' => $fsad],
            ['id_prodi' => '5003', 'nama_prodi' => 'Statistika', 'nama_fakultas' => $fsad],
            ['id_prodi' => '5004', 'nama_prodi' => 'Kimia', 'nama_fakultas' => $fsad],
            ['id_prodi' => '5005', 'nama_prodi' => 'Biologi', 'nama_fakultas' => $fsad],
            ['id_prodi' => '5006', 'nama_prodi' => 'Aktuaria', 'nama_fakultas' => $fsad],

            // Fakultas Teknologi Industri dan Rekayasa Sistem (FTIRS)
            ['id_prodi' => '5007', 'nama_prodi' => 'Teknik Mesin', 'nama_fakultas' => $ftirs],
            ['id_prodi' => '5008', 'nama_prodi' => 'Teknik Kimia', 'nama_fakultas' => $ftirs],
            ['id_prodi' => '5045', 'nama_prodi' => 'Teknik Pangan', 'nama_fakultas' => $ftirs],
            ['id_prodi' => '5009', 'nama_prodi' => 'Teknik Fisika', 'nama_fakultas' => $ftirs],
            ['id_prodi' => '5010', 'nama_prodi' => 'Teknik Sistem dan Industri', 'nama_fakultas' => $ftirs],
            ['id_prodi' => '5011', 'nama_prodi' => 'Teknik Material dan Metalurgi', 'nama_fakultas' => $ftirs],

            // Fakultas Teknik Sipil, Perencanaan, dan Kebumian (FTSPK)
            ['id_prodi' => '5012', 'nama_prodi' => 'Teknik Sipil', 'nama_fakultas' => $ftspk],
            ['id_prodi' => '5014', 'nama_prodi' => 'Teknik Lingkungan', 'nama_fakultas' => $ftspk],
            ['id_prodi' => '5016', 'nama_prodi' => 'Teknik Geomatika', 'nama_fakultas' => $ftspk],
            ['id_prodi' => '5017', 'nama_prodi' => 'Teknik Geofisika', 'nama_fakultas' => $ftspk],
            ['id_prodi' => '5013', 'nama_prodi' => 'Arsitektur', 'nama_fakultas' => $ftspk],
            ['id_prodi' => '5015', 'nama_prodi' => 'Perencanaan Wilayah dan Kota', 'nama_fakultas' => $ftspk], // PWK

            // Fakultas Teknologi Kelautan (FTK)
            ['id_prodi' => '5018', 'nama_prodi' => 'Teknik Perkapalan', 'nama_fakultas' => $ftk],
            ['id_prodi' => '5019', 'nama_prodi' => 'Teknik Sistem Perkapalan', 'nama_fakultas' => $ftk],
            ['id_prodi' => '5020', 'nama_prodi' => 'Teknik Kelautan', 'nama_fakultas' => $ftk],
            ['id_prodi' => '5046', 'nama_prodi' => 'Teknik Bangunan Lepas Pantai', 'nama_fakultas' => $ftk],
            ['id_prodi' => '5021', 'nama_prodi' => 'Teknik Transportasi Laut', 'nama_fakultas' => $ftk],

            // Fakultas Teknologi Elektro dan Informatika Cerdas (FTEIC)
            ['id_prodi' => '5022', 'nama_prodi' => 'Teknik Elektro', 'nama_fakultas' => $fteic],
            ['id_prodi' => '5023', 'nama_prodi' => 'Teknik Biomedik', 'nama_fakultas' => $fteic],
            ['id_prodi' => '5024', 'nama_prodi' => 'Teknik Komputer', 'nama_fakultas' => $fteic],
            ['id_prodi' => '5025', 'nama_prodi' => 'Teknik Informatika', 'nama_fakultas' => $fteic],
            ['id_prodi' => '5026', 'nama_prodi' => 'Sistem Informasi', 'nama_fakultas' => $fteic],
            ['id_prodi' => '5027', 'nama_prodi' => 'Teknologi Informasi', 'nama_fakultas' => $fteic],

            // Fakultas Desain Kreatif dan Bisnis Digital (FDKBD)
            ['id_prodi' => '5028', 'nama_prodi' => 'Desain Produk', 'nama_fakultas' => $fdkbd],
            ['id_prodi' => '5029', 'nama_prodi' => 'Desain Interior', 'nama_fakultas' => $fdkbd],
            ['id_prodi' => '5030', 'nama_prodi' => 'Desain Komunikasi Visual', 'nama_fakultas' => $fdkbd],
            ['id_prodi' => '5031', 'nama_prodi' => 'Manajemen Bisnis', 'nama_fakultas' => $fdkbd],
            ['id_prodi' => '5033', 'nama_prodi' => 'Studi Pembangunan', 'nama_fakultas' => $fdkbd],
        ];

        DB::table('program_studi')->insert($prodi);
    }
}
