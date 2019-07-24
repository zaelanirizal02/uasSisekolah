<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Logistik;
use App\User;

class LogistikController extends Controller
{
  public function index()
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $logistiks = Logistik::all();
      $users = User::all();

      return view ('logistik/home')->with('logistiks', $logistiks)->with('unsecape', $unescape)->with('users', $users);


    }


  public function show($id)
{
  $unescape = '<script> alert("Assalamualaikum") </script>';
  $logistik = Logistik::find($id);

  if(!$logistik)

  dd('Halaman tidak ditemukan');

  return view ('logistik/single', ['logistik'=>$id, 'unescape'=>$unescape, 'logistik'=>$logistik,]);
}

public function create()
{
  return view('logistik/create_logistik');
}

public function store(Request $req)
    {
      $logistik = new Logistik;
      $logistik->nama = $req->nama;
      $logistik->spp = $req->spp;
      $logistik->kelas = $req->kelas;
      $logistik->save();


      return redirect('logistik');
    }

}
