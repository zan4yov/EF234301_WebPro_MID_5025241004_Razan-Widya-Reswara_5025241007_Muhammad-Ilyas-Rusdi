<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->string('kode_mk', 8)->primary();
            $table->string('nama_mk', 128);
            $table->integer('sks');
            $table->integer('minimal_semester');
            $table->integer('jenis_mk'); // 1: Wajib 2: Pilihan
            $table->string('deskripsi_mk')->nullable();
            $table->string('program_studi_id_prodi', 4);
            $table->foreign('program_studi_id_prodi')->references('id_prodi')->on('program_studi');
        });
    }
    public function down(): void {
        Schema::dropIfExists('matakuliah');
    }
};