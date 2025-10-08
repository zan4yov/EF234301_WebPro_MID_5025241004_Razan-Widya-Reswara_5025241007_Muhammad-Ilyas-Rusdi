<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('kelas', function (Blueprint $table) {
            $table->string('id_kelas', 16)->primary();
            $table->string('nama_kelas');
            $table->integer('kapasitas');
            $table->integer('terisi');
            $table->dateTime('jam_mulai');
            $table->dateTime('jam_selesai');
            $table->string('matakuliah_kode_mk', 8);
            $table->string('dosen_nidn', 10);
            $table->string('tahun_akademik_id_tahun_akademik', 16);
            $table->string('ruangan_id_ruangan', 5);
            $table->foreign('matakuliah_kode_mk')->references('kode_mk')->on('matakuliah');
            $table->foreign('dosen_nidn')->references('nidn')->on('dosen');
            $table->foreign('tahun_akademik_id_tahun_akademik')->references('id_tahun_akademik')->on('tahun_akademik');
            $table->foreign('ruangan_id_ruangan')->references('id_ruangan')->on('ruangan');
        });
    }
    public function down(): void {
        Schema::dropIfExists('kelas');
    }
};