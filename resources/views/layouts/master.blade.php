<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/application.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
    .foot{
      background-color: black;
      color: white;
      height: 50px;
      margin-top: 300px;
    }
    </style>



  </head>
  <body>
    <header>
      <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">SISEKOLAH</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="/koperasi">Laporan Koperasi</a></li>
        <li><a href="/utama">Daftar Siswa</a></li>
        <li><a href="/guru">Daftar Guru</a></li>
        </ul>
    </div>
  </nav>
    </header>
    <br>

    @yield('content')

    <br>
    <footer class="foot">
      <div class="container">

        <div class="row pt-3">
          <div class="col text-center ">
            <p>&copy Projek UAS 2019.</p>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
