<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Siswa;
use App\User;
use App\Kelas;

class UtamaController extends Controller
{
  public function index()
    {
      $siswas = Siswa::all();

      return view ('utama/home')->with('siswas', $siswas);


    }


  public function show($id)
{
  $unescape = '<script> alert("Assalamualaikum") </script>';
  $siswa = Siswa::find($id);

  if(!$siswa)

  dd('Halaman tidak ditemukan');

  return view ('utama/single', ['utama'=>$id, 'unescape'=>$unescape, 'siswa'=>$siswa,]);
}

public function create()
{
  return view('utama/create_siswa');
}

public function store(Request $req)
    {
      if ($req->spp != 0) {
        $kelas = Kelas::where('nama_kelas','LIKE',"%{$req->kelas}%")->inRandomOrder()->first();

        $siswa = new Siswa;
        $siswa->nama = $req->nama;
        $siswa->spp = $req->spp;
        $siswa->id_kelas = $kelas->id;
        $siswa->save();
      }
      else {
        $siswa = new Siswa;
        $siswa->nama = $req->nama;
        $siswa->spp = $req->spp;
        $siswa->id_kelas = 20;
        $siswa->save();
      }

      return redirect('utama');
    }

    public function destroy($id)
    {
      Siswa::find($id)->delete();
      return redirect()->back();
    }

    public function edit($id)
  {
    $siswa = Siswa::find($id);

      if (!$siswa)
      dd('Halaman tidak tersedia ');

      return view ('utama/edit', ['utama'=>$id, 'siswa'=>$siswa]);
  }

  public function update(Request $req, $id)
  {
    $utama = Siswa::find($id);
      $kelas = Kelas::where('nama_kelas','LIKE',"%{$req->kelas}%")->inRandomOrder()->first();

    $utama->update([
      'nama' => $req->nama,
      'spp' => $req->spp,
      'id_kelas' => $kelas->id
    ]);

    return redirect('utama');
  }


}
