<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalFactory> */
    use HasFactory;

    protected $fillable = [
        'mapel',
        'hari',
        'ruangan',
        'kelas',
        'jam_mulai',
        'jam_selesai',
    ];
}
