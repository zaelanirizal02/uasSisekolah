<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
  protected $table = "tb_siswa";

  protected $fillable = ['nama', 'spp', 'id_kelas'];

    public $timestamps = false;

    function fksiswa(){
      return $this->belongsTo(Kelas::class);
    }
}
