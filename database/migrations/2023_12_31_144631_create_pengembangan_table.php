<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembanganTable extends Migration
{
    public function up()
    {
        Schema::create('pengembangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('unit_kerja');
            $table->string('file_sk_penugasan');
            $table->string('file_bukti_kinerja');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengembangan');
    }
}

