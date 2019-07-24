@extends('layouts.master')

@section('title')
SISEKOLAH | Siswa
@endsection

@section('content')
<div class="container">
  <h1 class="text-center">Daftar Siswa</h1
  <hr>

  <a href="/utama/create" class="btn btn-info">Create</a>

  <table class="table table-striped table-bordered">
  <thead class="warning">
    <tr>
      <th>No</th>
      <th>nama</th>
      <th>spp</th>
      <th>kelas</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    {{!$no=1}}
    @foreach($siswas as $siswa)
    <tr>
      <td>{{$no++}}</td>
      <td><a href="{{ route('link', $siswa->id) }}">{{$siswa->nama}}</a>
      </td>
      <td>Rp. {{ number_format($siswa->spp,'0',',','.') }}</td>
      <td>{{ App\Kelas::find($siswa->id_kelas)->nama_kelas }}</td>
      <td>
        <form style="float:left" action="/utama/{{$siswa->id}}" method="post">
        <input class="btn btn-danger" type="submit" name="submit" value="delete">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}

      </form>
      @if($siswa->spp == 0)
      <span style="padding:5px">|</span>
      <a class="btn btn-success" href="{{route('ngedit', $siswa->id)}}">bayar</a>
      @endif
    </td>


    </tr>

      @endforeach
  </tbody>
  </table>
</div>




@endsection
