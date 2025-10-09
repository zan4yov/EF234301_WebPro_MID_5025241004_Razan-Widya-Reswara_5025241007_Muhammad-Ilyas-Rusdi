<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('krs', function (Blueprint $table) {
            $table->string('id_krs', 32)->primary();
            $table->integer('status_persetujuan'); // 0: Pending, 1: Approved, 2: Rejected
            $table->timestamp('tanggal_pengajuan');
            $table->integer('semester');
            $table->string('catatan_penolakan', 255)->nullable();
            $table->string('mahasiswa_nrp', 10);
            $table->string('tahun_akademik_id_tahun_akademik', 16);
            $table->foreign('mahasiswa_nrp')->references('nrp')->on('mahasiswa');
            $table->foreign('tahun_akademik_id_tahun_akademik')->references('id_tahun_akademik')->on('tahun_akademik');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('krs');
    }
};
