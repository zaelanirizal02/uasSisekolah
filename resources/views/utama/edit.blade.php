@extends('layouts.master')

@section('title', 'create siswa')

@section('content')
  <h1 class="text-center">Create Siswa</h1>

<div class="container" style="border:1px solid black; padding:10px">
  <form action="/utama/{{$siswa->id}}" method="post">
    <input type="hidden" name="_method" value="PUT">

 <div class="form-group">
   <label for="nama">Nama:</label>
   <input type="text" value="{{$siswa->nama}}" class="form-control" name="nama" id="nama">
 </div>

 <div class="form-group">
  <label for="sel1">Pilih Kelas:</label>
  <select class="form-control" id="sel1" name="kelas">
    <option value="7">VII (tujuh)</option>
    <option value="8">VIII (delapan)</option>
    <option value="9">IX (sembilan)</option>
  </select>
</div>

 <div class="form-group">
   <label for="spp">Bayar SPP:</label>
   <input type="number" value="0" class="form-control" name="spp" id="spp">
 </div>

 <button type="submit" class="btn btn-default" style="border:2px">Update</button>
{{ csrf_field() }}

</div>

   </form>

  @endsection
