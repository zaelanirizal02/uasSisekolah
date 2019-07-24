<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Guru;
use App\User;
use App\Kelas;

class GuruController extends Controller
{
  public function index()
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $gurus = Guru::all();


      return view ('guru/home')->with('gurus', $gurus)->with('unsecape', $unescape);


    }


  public function show($id)
{
  $unescape = '<script> alert("Assalamualaikum") </script>';
  $guru = Guru::find($id);

  if(!$guru)

  dd('Halaman tidak ditemukan');

  return view ('guru/single', ['guru'=>$id, 'unescape'=>$unescape, 'guru'=>$guru,]);
}

public function create()
{
  return view('guru/create_guru');
}

public function store(Request $req)
    {
      $guru = new Guru;
      $guru->nama = $req->nama;
      $guru->kode = $req->kode;
      $guru->jenis_kelamin = $req->jenis_kelamin;
      $guru->mengajar = $req->mengajar;
      $guru->gaji = $req->gaji;
      $guru->save();


      return redirect('guru/create');
    }


    public function edit($id)
        {
          $guru = Guru::find($id);

          if (!$guru)
          dd('Halaman tidak tersedia ');

          return view ('guru/edit', ['guru'=>$id, 'guru'=>$guru]);
        }


        public function update(Request $req, $id)
        {
          $guru = Guru::find($id);

          $guru->update([
            'nama' => $req->nama,
            'kode' => $req->kode,
            'jenis_kelamin' => $req->jenis_kelamin,
            'mengajar' => $req->mengajar,
            'gaji' => $req->gaji
          ]);

          return redirect()->back();
        }

        public function destroy($id)
        {
           $guru= Guru::find($id);
           $guru->delete();
           return redirect()->back();
        }

}
