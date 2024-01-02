<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurnalTable extends Migration
{
    public function up()
    {
        Schema::create('jurnal', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('unit_kerja');
            $table->string('judul');
            $table->string('file_jurnal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jurnal');
    }
}

