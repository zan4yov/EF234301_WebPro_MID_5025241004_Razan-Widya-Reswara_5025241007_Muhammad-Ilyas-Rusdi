<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('ruangan', function (Blueprint $table) {
            $table->string('id_ruangan', 5)->primary();
            $table->string('tempat_ruangan');
        });
    }
    public function down(): void {
        Schema::dropIfExists('ruangan');
    }
};