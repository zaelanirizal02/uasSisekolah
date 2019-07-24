<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKoperasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_koperasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pengeluaran');
            $table->string('nominal');
            $table->string('pengeluaran_bln_lalu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_koperasi');
    }
}
