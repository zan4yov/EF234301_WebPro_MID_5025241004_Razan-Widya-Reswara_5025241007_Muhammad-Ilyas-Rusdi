<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tahun_akademik', function (Blueprint $table) {
            $table->string('id_tahun_akademik', 6)->primary();
            $table->integer('semester'); // 1 ganjil 2 genap
            $table->integer('tahun');
            $table->boolean('status_aktif')->default(false);
        });
    }
    public function down(): void {
        Schema::dropIfExists('tahun_akademik');
    }
};