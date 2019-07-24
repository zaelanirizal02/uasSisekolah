<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
  protected $table = "tb_guru";

  protected $fillable = ['nama', 'kode', 'jenis_kelamin', 'mengajar', 'gaji'];

    public $timestamps = false;

    function fkguru(){
      return $this->belongsTo(Kelas::class);
    }
}
