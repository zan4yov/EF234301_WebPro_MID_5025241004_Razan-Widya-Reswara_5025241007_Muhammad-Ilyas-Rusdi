<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kelas_waitlists', function (Blueprint $table) {
            $table->id();
            $table->string('kelas_id_kelas');
            $table->string('mahasiswa_nrp');
            $table->timestamps();
            $table->unique(['kelas_id_kelas', 'mahasiswa_nrp']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelas_waitlists');
    }
};
