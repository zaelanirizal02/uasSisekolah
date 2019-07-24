<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('spp');
            $table->unsignedBigInteger('id_kelas');
            $table->timestamps();
        });
        // Schema::table('tb_siswa', function (Blueprint $kolom){
        //   $kolom->foreign('id_kelas')->references('id')->on('tb_kelas')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_siswa');
    }
}
