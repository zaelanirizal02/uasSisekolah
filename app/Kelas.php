<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
  protected $table = "tb_kelas";

  protected $fillable = ['nama_kelas'];

    public $timestamps = false;
    function pkkelas(){
      return $this->hasMany(Siswa::class);
    }
}
