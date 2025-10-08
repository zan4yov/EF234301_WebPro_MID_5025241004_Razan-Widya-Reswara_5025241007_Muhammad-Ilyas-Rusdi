<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('dosen', function (Blueprint $table) {
            $table->string('nidn', 10)->primary();
            $table->string('nama_dosen');
            $table->string('no_telepon_dosen', 16)->nullable();
            $table->string('program_studi_id_prodi', 4)->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreign('program_studi_id_prodi')->references('id_prodi')->on('program_studi');
        });
    }
    public function down(): void {
        Schema::dropIfExists('dosen');
    }
};