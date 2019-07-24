<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Kelas;
use App\User;

class KelasController extends Controller
{
  public function index()
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $kelass = Kelas::all();
      $users = User::all();

      return view ('kelas/home')->with('kelass', $kelass)->with('unsecape', $unescape)->with('users', $users);


    }


  public function show($id)
{
  $unescape = '<script> alert("Assalamualaikum") </script>';
  $kelas = Kelas::find($id);

  if(!$kelas)

  dd('Halaman tidak ditemukan');

  return view ('kelas/single', ['kelas'=>$id, 'unescape'=>$unescape, 'kelas'=>$kelas,]);
}

public function create()
{
  return view('kelas/create_kelas');
}

public function store(Request $req)
    {
      $kelas = new Kelas;
      $kelas->nama_kelas = $req->nama_kelas;
      $kelas->save();


      return redirect('kelas');
    }

}
