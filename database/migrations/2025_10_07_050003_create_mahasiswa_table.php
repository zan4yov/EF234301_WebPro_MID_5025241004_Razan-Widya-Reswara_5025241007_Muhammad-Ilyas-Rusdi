<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nrp', 10)->primary();
            $table->string('nama');
            $table->integer('angkatan');
            $table->integer('semester');
            $table->string('status_mahasiswa');
            $table->string('alamat')->nullable();
            $table->string('no_telepon', 16)->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->string('program_studi_id_prodi', 4)->nullable();
            $table->string('dosen_nidn', 10)->nullable();

            $table->foreign('program_studi_id_prodi')->references('id_prodi')->on('program_studi');
            $table->foreign('dosen_nidn')->references('nidn')->on('dosen');
        });
    }
    public function down(): void {
        Schema::dropIfExists('mahasiswa');
    }
};