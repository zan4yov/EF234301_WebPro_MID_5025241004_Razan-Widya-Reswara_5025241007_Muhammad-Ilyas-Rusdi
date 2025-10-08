<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('detail_krs', function (Blueprint $table) {
            $table->string('id_detail_krs', 64)->primary();
            $table->string('nilai_huruf', 2)->nullable();
            $table->foreign('krs_id_krs')->references('id_krs')->on('krs');
            $table->foreign('kelas_id_kelas')->references('id_kelas')->on('kelas');
            $table->string('krs_id_krs', 32);
            $table->string('kelas_id_kelas', 16);
        });
    }
    public function down(): void {
        Schema::dropIfExists('detail_krs');
    }
};
