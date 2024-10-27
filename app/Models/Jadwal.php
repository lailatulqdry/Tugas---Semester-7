<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalFactory> */
    use HasFactory;

    protected $fillable = [
        'hari',
        'ruangan',
        'jam_mulai',
        'jam_selesai',
        'mata_pelajarann_id',
        'recapkehadiran_id',
    ];

    public function mata_pelajarann()
    {
        return $this->hasMany(mata_pelajarann::class);
    }

    public function recapkehadiran()
    {
        return $this->hasMany(RecapKehadiran::class);
    }
}
