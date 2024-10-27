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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mata_pelajarann_id')->constrained('mata_pelajaranns')->onDelete('cascade');
            $table->foreignId('recapkehadiran_id')->constrained('recapkehadirans')->onDelete('cascade');
            $table->string('hari');
            $table->string('ruangan');
            $table->time('jam mulai');
            $table->time('jam selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
