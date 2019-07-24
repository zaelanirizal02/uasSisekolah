@extends('layouts.master')

@section('title', 'create koperasi')

@section('content')
  <h1 class="text-center">Data Pengeluaran Koperasi</h1>

<div class="container" style="border:1px solid black; padding:10px">
  <form action="/koperasi" method="post">

 <div class="form-group">
   <label for="nama">nama_pengeluaran:</label>
   <input type="text" class="form-control" name="nama_pengeluaran" id="nama_pengeluaran">
 </div>

 <div class="form-group">
   <label for="nominal">nominal:</label>
   <input type="number" value="0" class="form-control" name="nominal" id="nominal">
 </div>


 <div class="form-group">
   <label for="pengeluaran_bln_lalu">pengeluaran_bln_lalu:</label>
   <input type="number" value="0" class="form-control" name="pengeluaran_bln_lalu" id="pengeluaran_bln_lalu">
 </div>



 <button type="submit" class="btn btn-default" style="border:2px">Create</button>
{{ csrf_field() }}

</div>

   </form>

  @endsection
