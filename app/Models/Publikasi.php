<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    use HasFactory;

    protected $table = 'publikasi';
    protected $fillable = [
        'nama',
        'nip',
        'pangkat',
        'jabatan',
        'unit_kerja',
        'judul',
        'file_publikasi',
    ];
}
