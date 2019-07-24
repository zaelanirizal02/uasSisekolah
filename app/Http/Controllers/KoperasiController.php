<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Koperasi;
use App\User;
use App\Kelas;

class KoperasiController extends Controller
{
  public function index()
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $koperasis = Koperasi::all();


      return view ('koperasi/home')->with('koperasis', $koperasis)->with('unsecape', $unescape);


    }


  public function show($id)
{
  $unescape = '<script> alert("Assalamualaikum") </script>';
  $koperasi = Koperasi::find($id);

  if(!$koperasi)

  dd('Halaman tidak ditemukan');

  return view ('koperasi/single', ['koperasi'=>$id, 'unescape'=>$unescape, 'koperasi'=>$koperasi,]);
}

public function create()
{
  return view('koperasi/create_koperasi');
}

public function store(Request $req)
    {
      $koperasi = new Koperasi;
      $koperasi->nama_pengeluaran = $req->nama_pengeluaran;
      $koperasi->nominal = $req->nominal;
      $koperasi->pengeluaran_bln_lalu = $req->pengeluaran_bln_lalu;
      $koperasi->save();


      return redirect('koperasi/create');
    }


    public function edit($id)
        {
          $koperasi = Koperasi::find($id);

          if (!$koperasi)
          dd('Halaman tidak tersedia ');

          return view ('koperasi/edit', ['koperasi'=>$id, 'koperasi'=>$koperasi]);
        }


        public function update(Request $req, $id)
        {
          $koperasi = Koperasi::find($id);

          $koperasi->update([
            'nama_pengeluaran' => $req->nama_pengeluaran,
            'nominal' => $req->nominal,
            'pengeluaran_bln_lalu' => $req->pengeluaran_bln_lalu
          ]);

          return redirect()->back();
        }

        public function destroy($id)
        {
           $koperasi= Koperasi::find($id);
           $koperasi->delete();
           return redirect()->back();
        }

}
