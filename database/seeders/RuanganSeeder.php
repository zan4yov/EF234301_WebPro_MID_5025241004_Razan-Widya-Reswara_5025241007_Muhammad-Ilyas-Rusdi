<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $prefixMap = [
            'Fisika' => 'FS',
            'Matematika' => 'MA',
            'Statistika' => 'ST',
            'Kimia' => 'KI',
            'Biologi' => 'BI',
            'Aktuaria' => 'AK',
            'Teknik Mesin' => 'ME',
            'Teknik Kimia' => 'TK',
            'Teknik Pangan' => 'PA',
            'Teknik Fisika' => 'TF',
            'Teknik Sistem dan Industri' => 'IS',
            'Teknik Material dan Metalurgi' => 'MT',
            'Teknik Sipil' => 'SP',
            'Teknik Lingkungan' => 'LI',
            'Teknik Geomatika' => 'GM',
            'Teknik Geofisika' => 'GF',
            'Teknik Perkapalan' => 'PK',
            'Teknik Sistem Perkapalan' => 'SK',
            'Teknik Kelautan' => 'KL',
            'Teknik Bangunan Lepas Pantai' => 'BL',
            'Teknik Transportasi Laut' => 'TR',
            'Teknik Elektro' => 'EL',
            'Teknik Biomedik' => 'BM',
            'Teknik Komputer' => 'KO',
            'Teknik Informatika' => 'IF',
            'Sistem Informasi' => 'SI',
            'Teknologi Informasi' => 'TI',
            'Arsitektur' => 'AR',
            'Perencanaan Wilayah dan Kota' => 'PW',
            'Desain Produk' => 'DP',
            'Desain Interior' => 'DI',
            'Desain Komunikasi Visual' => 'DK',
            'Manajemen Bisnis' => 'MB',
            'Studi Pembangunan' => 'SB',
        ];

        $allRuangan = [];
        $programStudis = DB::table('program_studi')->get();

        foreach ($programStudis as $prodi) {
            $prefix = $prefixMap[$prodi->nama_prodi] ?? strtoupper(substr(str_replace(' ', '', $prodi->nama_prodi), 0, 2));

            $ruanganNumbers = ['101', '102', '103','201', '202'];

            foreach ($ruanganNumbers as $number) {
                $allRuangan[] = [
                    'id_ruangan' => $prefix . $number,
                    'tempat_ruangan' => $prodi->nama_prodi,
                ];
            }
        }
        
        $uniqueRuangan = collect($allRuangan)->unique('id_ruangan')->values()->all();

        DB::table('ruangan')->insert($uniqueRuangan);
    }
}

