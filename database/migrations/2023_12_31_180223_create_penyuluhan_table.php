<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyuluhanTable extends Migration
{
    public function up()
    {
        Schema::create('penyuluhan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('unit_kerja');
            $table->string('tingkat');
            $table->string('deskripsi');
            $table->year('tahun_mulai');
            $table->year('tahun_akhir');
            $table->string('file_sk_penugasan');
            $table->string('file_bukti_kinerja');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penyuluhan');
    }
}

