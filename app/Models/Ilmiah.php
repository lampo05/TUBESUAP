<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ilmiah extends Model
{
    use HasFactory;

    protected $table = 'ilmiah';
    protected $fillable = [
        'nama',
        'nip',
        'pangkat',
        'jabatan',
        'unit_kerja',
        'jenis',
        'deskripsi',
        'bulan',
        'tahun',
        'file_sk_penugasan',
        'file_bukti_kinerja',
    ];
}
