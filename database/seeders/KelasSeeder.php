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
        $ta = DB::table('tahun_akademik')->where('status_aktif', true)->first();
        if (!$ta) {
            $ta = DB::table('tahun_akademik')->orderByDesc('id_tahun_akademik')->first();
        }
        if (!$ta) {
            $defaultId = '202501';
            DB::table('tahun_akademik')->insert([
                'id_tahun_akademik' => $defaultId,
                'semester' => 1, // ganjil
                'tahun' => 2025,
                'status_aktif' => true,
            ]);
            $ta = DB::table('tahun_akademik')->where('id_tahun_akademik', $defaultId)->first();
            $this->command->warn('Tidak menemukan Tahun Akademik aktif. Membuat default 202501 (ganjil).');
        }

        $isGanjil = ((int)($ta->semester ?? 1)) === 1;
        $tahun = (int)($ta->tahun ?? 2025);

        $semesterStart = $isGanjil
            ? Carbon::parse("first monday of September {$tahun}")
            : Carbon::parse("first monday of February {$tahun}");

        $classTimes = [
            ['start' => '07:30', 'end' => '10:00'],
            ['start' => '10:00', 'end' => '12:30'],
            ['start' => '13:00', 'end' => '15:30'],
            ['start' => '15:30', 'end' => '18:00'],
        ];

        $allKelas = [];
        $programStudis = DB::table('program_studi')->get();

    $ignoreParity = (bool) env('KELAS_SEEDER_IGNORE_PARITY', false);

    foreach ($programStudis as $prodi) {
            $prodiId = $prodi->id_prodi;
            $prodiNama = $prodi->nama_prodi;

            $dosenProdi = DB::table('dosen')->where('program_studi_id_prodi', $prodiId)->get();
            $ruanganProdi = DB::table('ruangan')->where('tempat_ruangan', $prodiNama)->get();
            $matakuliahProdi = DB::table('matakuliah')->where('program_studi_id_prodi', $prodiId)->get();

            if ($dosenProdi->isEmpty() || $ruanganProdi->isEmpty() || $matakuliahProdi->isEmpty()) {
                $this->command->warn("Lewati prodi {$prodiId} ({$prodiNama}) karena data dosen/ruangan/matakuliah belum lengkap.");
                continue;
            }

            $dosenIndex = 0;
            $ruangIndex = 0;
            $slotIndex = 0;

            foreach ($matakuliahProdi as $matakuliah) {
                if (!$ignoreParity) {
                    $minSem = (int)($matakuliah->minimal_semester ?? 1);
                    $isMkGanjil = $minSem % 2 === 1;
                    if ($isGanjil && !$isMkGanjil) {
                        continue;
                    }
                    if (!$isGanjil && $isMkGanjil) {
                        continue;
                    }
                }

                foreach (['A', 'B'] as $varian) {
                    $dosen = $dosenProdi[$dosenIndex % $dosenProdi->count()];
                    $ruangan = $ruanganProdi[$ruangIndex % $ruanganProdi->count()];
                    $timeSlot = $classTimes[$slotIndex % count($classTimes)];

                    $dayOffset = (crc32($matakuliah->kode_mk . $varian) % 5);
                    $baseDate = $semesterStart->copy()->addDays($dayOffset);

                    $allKelas[] = [
                        'id_kelas' => $matakuliah->kode_mk . '-' . $varian,
                        'nama_kelas' => $matakuliah->nama_mk . ' - Kelas ' . $varian,
                        'kapasitas' => 1,
                        'terisi' => 0,
                        'jam_mulai' => $baseDate->copy()->setTimeFromTimeString($timeSlot['start']),
                        'jam_selesai' => $baseDate->copy()->setTimeFromTimeString($timeSlot['end']),
                        'matakuliah_kode_mk' => $matakuliah->kode_mk,
                        'dosen_nidn' => $dosen->nidn,
                        'tahun_akademik_id_tahun_akademik' => $ta->id_tahun_akademik,
                        'ruangan_id_ruangan' => $ruangan->id_ruangan,
                    ];

                    $dosenIndex++; $ruangIndex++; $slotIndex++;
                }
            }
        }

        if (empty($allKelas)) {
            $this->command->warn('Tidak ada data kelas yang dihasilkan. Pastikan seeders ProgramStudi, Dosen, Ruangan, Matakuliah, dan Tahun Akademik sudah dijalankan.');
            return;
        }

        $updateColumns = [
            'nama_kelas',
            'kapasitas',
            'jam_mulai',
            'jam_selesai',
            'matakuliah_kode_mk',
            'dosen_nidn',
            'tahun_akademik_id_tahun_akademik',
            'ruangan_id_ruangan',
        ];
        foreach (array_chunk($allKelas, 500) as $chunk) {
            DB::table('kelas')->upsert($chunk, ['id_kelas'], $updateColumns);
        }

        $this->command->info('Seeder Kelas selesai: ' . count($allKelas) . ' kelas dibuat untuk semua program studi.');
    }
}