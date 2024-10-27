<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'nis',
        'jurusan',
        'alamat',
        'no_hp',
        'jenis_kelamin',
        'kelas_id',
        'recapkehadiran_id',
    ];

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }

    public function recapkehadiran()
    {
        return $this->hasMany(RecapKehadiran::class);
    }


}
