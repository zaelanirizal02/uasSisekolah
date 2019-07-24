@extends('layouts.master')

@section('title')
SISEKOLAH | Koperasi
@endsection

@section('content')
<div class="container">
  <h1 class="text-center">Daftar Koperasi</h1
  <hr>

  <a href="/koperasi/create" class="btn btn-info">Create</a>

  <table class="table table-striped table-bordered">
  <thead class="warning">
    <tr>
      <th>No</th>
      <th>Nama Pengeluaran</th>
      <th>Nominal</th>
      <th>Pengeluaran Bulan Lalu</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    {{!$no=1}}
    @foreach($koperasis as $koperasi)
    <tr>
      <td>{{$no++}}</td>
      <td><a href="{{ route('link', $koperasi->id) }}">{{$koperasi->nama_pengeluaran}}</a>
      </td>
      <td>Rp. {{ number_format($koperasi->nominal,'0',',','.') }}</td>
      <td>Rp. {{ number_format($koperasi->pengeluaran_bln_lalu,'0',',','.') }}</td>

      <td>
        <form style="float:left" action="/koperasi/{{$koperasi->id}}" method="post">
        <input class="btn btn-danger" type="submit" name="submit" value="delete">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}

      </form>

      <span style="padding:5px">|</span>
      <a class="btn btn-success" href="{{route('ngedi', $koperasi->id)}}">edit</a>
      </td>


    </tr>

      @endforeach
  </tbody>
  </table>
</div>




@endsection
