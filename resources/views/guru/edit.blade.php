@extends('layouts.master')

@section('title', 'create guru')

@section('content')
  <h1 class="text-center">Create Guru</h1>

<div class="container" style="border:1px solid black; padding:10px">
  <form action="/guru/{{$guru->id}}" method="post">

 <div class="form-group">
   <label for="nama">Nama:</label>
   <input type="text" class="form-control" name="nama" id="nama">
 </div>

 <div class="form-group">
   <label for="kode">Kode:</label>
   <input type="text" class="form-control" name="kode" id="kode">
 </div>


 <div class="form-group">
  <label for="sel1">jenis_kelamin:</label>
  <select class="form-control" id="sel1" name="jenis_kelamin">
    <option value="L">Laki-laki</option>
    <option value="P">Perempuan</option>
  </select>
</div>

 <div class="form-group">
   <label for="mengajar">Mengajar:</label>
   <input type="text" class="form-control" name="mengajar" id="mengajar">
 </div>

 <div class="form-group">
   <label for="gaji">Gaji:</label>
   <input type="number" value="0" class="form-control" name="gaji" id="gaji">
 </div>


 <button type="submit" class="btn btn-default" style="border:2px">Create</button>
{{ csrf_field() }}

</div>

   </form>

  @endsection
