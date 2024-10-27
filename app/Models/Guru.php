<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    /** @use HasFactory<\Database\Factories\GuruFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
        'alamat',
        'jenis_kelamin',
        'jadwal_id',
        'recapkehadiran_id',
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }

    public function recapkehadiran()
    {
        return $this->hasMany(RecapKehadiran::class);
    }
}
