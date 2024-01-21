<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = ['siswa_id', 'mata_pelajaran', 'latihan_soal', 'ulangan_harian', 'ulangan_tengah_semester', 'ulangan_semester'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}