<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIlmiahTable extends Migration
{
    public function up()
    {
        Schema::create('ilmiah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('unit_kerja');
            $table->string('jenis');
            $table->string('deskripsi');
            $table->string('bulan');
            $table->year('tahun');
            $table->string('file_sk_penugasan');
            $table->string('file_bukti_kinerja');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ilmiah');
    }
}

