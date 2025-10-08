<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('program_studi', function (Blueprint $table) {
            $table->string('id_prodi', 4)->primary();
            $table->string('nama_prodi');
            $table->string('nama_fakultas');
        });
    }
    public function down(): void {
        Schema::dropIfExists('program_studi');
    }
};
