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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id')->constrained('kelass')->onDelete('cascade');
            $table->foreignId('recapkehadiran_id')->constrained('recapkehadirans')->onDelete('cascade');
            $table->string('nama');
            $table->integer('nis');
            $table->string('jurusan');
            $table->string('alamat');
            $table->string('no_hp');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
