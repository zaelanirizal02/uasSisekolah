@extends('layouts.master')

@section('title')
SISEKOLAH | Guru
@endsection

@section('content')
<div class="container">
  <h1 class="text-center">Daftar Guru</h1
  <hr>

  <a href="/guru/create" class="btn btn-info">Create</a>

  <table class="table table-striped table-bordered">
  <thead class="warning">
    <tr>
      <th>Nama</th>
      <th>Nama</th>
      <th>Kode</th>
      <th>Jenis Kelamin</th>
      <th>Gaji</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    {{!$no=1}}
    @foreach($gurus as $guru)
    <tr>
      <td>{{$no++}}</td>
      <td><a href="{{ route('link', $guru->id) }}">{{$guru->nama}}</a>
      </td>
      <td>{{$guru->kode}}</td>
      <td>{{$guru->jenis_kelamin}}</td>
      <td>Rp. {{ number_format($guru->gaji,'0',',','.') }}</td>
      <td>
        <form style="float:left" action="/guru/{{$guru->id}}" method="post">
        <input class="btn btn-danger" type="submit" name="submit" value="delete">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}

      </form>

      <span style="padding:5px">|</span>
      <a class="btn btn-success" href="{{route('ngedi', $guru->id)}}">bayar</a>
      </td>


    </tr>

      @endforeach
  </tbody>
  </table>
</div>




@endsection
