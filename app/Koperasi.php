<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model
{
  protected $table = "tb_koperasi";

  protected $fillable = ['nama_pengeluaran', 'nominal', 'pengeluaran_bln_lalu'];

    public $timestamps = false;

    function fkkoperasi(){
      return $this->belongsTo(Kelas::class);
    }
}
