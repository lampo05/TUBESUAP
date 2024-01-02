<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyuluhan extends Model
{
    use HasFactory;

    protected $table = 'penyuluhan';
    protected $fillable = [
        'nama',
        'nip',
        'pangkat',
        'jabatan',
        'unit_kerja',
        'tingkat',
        'deskripsi',
        'tahun_mulai',
        'tahun_akhir',
        'file_sk_penugasan',
        'file_bukti_kinerja',
    ];
}
