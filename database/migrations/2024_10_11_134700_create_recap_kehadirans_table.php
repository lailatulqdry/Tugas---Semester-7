<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recap_kehadirans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswas');
            $table->foreignId('guru_id')->constrained('gurus');
            $table->foreignId('lokasi_id')->constrained('lokasis');
            $table->enum('kehadiran', ['Hadir', 'Alpha', 'Izin', 'Sakit'])->default('Hadir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recap_kehadirans');
    }
};
