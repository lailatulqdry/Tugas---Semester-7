<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecapKehadiran extends Model
{
    /** @use HasFactory<\Database\Factories\RecapKehadiranFactory> */
    use HasFactory;

    protected $fillable = [
        'siswa',
        'guru',
        'jadwal',
    ];
}
