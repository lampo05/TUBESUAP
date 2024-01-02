<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembangan extends Model
{
    use HasFactory;

    protected $table = 'pengembangan';
    protected $fillable = [
        'nama',
        'nip',
        'pangkat',
        'jabatan',
        'unit_kerja',
        'file_sk_penugasan',
        'file_bukti_kinerja',
    ];
}
