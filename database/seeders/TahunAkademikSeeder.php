<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TahunAkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tahun_akademik')->delete();

        DB::table('tahun_akademik')->insert([
            [
                'id_tahun_akademik' => '0000000000202501',
                'semester' => 1, // 1 for Ganjil
                'tahun' => 2025,
                'status_aktif' => 1,
            ],
            [
                'id_tahun_akademik' => '0000000000202502',
                'semester' => 2, // 2 for Genap
                'tahun' => 2025,
                'status_aktif' => 0,
            ],
        ]);
    }
}