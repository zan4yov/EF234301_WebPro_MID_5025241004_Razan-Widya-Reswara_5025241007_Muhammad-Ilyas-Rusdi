<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('kelas')->delete();

        $prodiId = '5025';
        $prodiNama = 'Teknik Informatika';
        $tahunAkademikGanjil = '202501';

        $dosenProdi = DB::table('dosen')->where('program_studi_id_prodi', $prodiId)->get();
        $ruanganProdi = DB::table('ruangan')->where('tempat_ruangan', $prodiNama)->get();
        $matakuliahProdi = DB::table('matakuliah')->where('program_studi_id_prodi', $prodiId)->get();

        if ($dosenProdi->isEmpty() || $ruanganProdi->isEmpty() || $matakuliahProdi->isEmpty()) {
            $this->command->info('Tidak dapat membuat kelas, pastikan data dosen, ruangan, dan matakuliah sudah terisi.');
            return;
        }

        $allKelas = [];
        $classTimes = [
            ['start' => '07:30', 'end' => '10:00'],
            ['start' => '10:00', 'end' => '12:30'],
            ['start' => '13:00', 'end' => '15:30'],
            ['start' => '15:30', 'end' => '18:00'],
        ];

        foreach ($matakuliahProdi as $matakuliah) {
            if ($matakuliah->minimal_semester % 2 != 0) {
                $kelasVarian = ['A', 'B'];

                foreach ($kelasVarian as $varian) {
                    $dosen = $dosenProdi->random();
                    $ruangan = $ruanganProdi->random();
                    $timeSlot = $classTimes[array_rand($classTimes)];
                    
                    $firstMonday = Carbon::parse('first monday of September 2025');
                    $baseDate = $firstMonday->copy()->addDays(rand(0, 4));

                    $allKelas[] = [
                        'id_kelas' => $matakuliah->kode_mk . '-' . $varian,
                        'nama_kelas' => $matakuliah->nama_mk . ' - Kelas ' . $varian,
                        'kapasitas' => 40,
                        'terisi' => 0,
                        'jam_mulai' => $baseDate->copy()->setTimeFromTimeString($timeSlot['start']),
                        'jam_selesai' => $baseDate->copy()->setTimeFromTimeString($timeSlot['end']),
                        'matakuliah_kode_mk' => $matakuliah->kode_mk,
                        'dosen_nidn' => $dosen->nidn,
                        'tahun_akademik_id_tahun_akademik' => $tahunAkademikGanjil,
                        'ruangan_id_ruangan' => $ruangan->id_ruangan,
                    ];
                }
            }
        }
        
        DB::table('kelas')->insert($allKelas);
    }
}