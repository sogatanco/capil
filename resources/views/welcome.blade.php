<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/all.css')}}">
    <link rel="stylesheet" href="{{url('css/welcome.css')}}">
    <script src="{{url('js/app.js')}}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700i,900&display=swap" rel="stylesheet">
    <title>Dinas Kependudukan dan Catatan Sipil Kota Lhokseumawe</title>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="{{url('images/logo.png')}}" alt="logo">
    </a>
  </div>
</nav>

<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid" style="background-image:url('images/background.png');background-size: cover;">
    <div class="container">
        <h1 class="big-title"><strong>Kependudukan</strong> dan <strong>Capil</strong> <br>dalam genggaman </h1>
        <div class="tombol">
        <button type="button" class="btn btn-success mr-1">Getting Started</button>
        <button type="button" class="btn btn-danger">Login</button>
        </div>
    </div>
</div>

<!-- step -->
<div class="step">
  <div class="container">
    <div class="row">
      <div class="col-3 text-center">
        <img src="{{url('images/registericon.png')}}" class="mx-auto d-block" alt="register" >
        <strong class="mb-0">Registrasi</strong><br>
        <p>daftar dan isi data diri dengan benar</p>
      </div>
      <div class="col-3 text-center">
        <img src="{{url('images/unggahicon.png')}}" class="mx-auto d-block" alt="unggah" >
        <strong>Unggah</strong>
        <p>upload berkas persyaratan yang diminta</p>
      </div>
      <div class="col-3 text-center">
        <img src="{{url('images/verivikasiicon.png')}}" class="mx-auto d-block" alt="verivication" >
        <strong>Verifikasi</strong>
        <p>tunggu proses verivikasi data oleh petugas</p>
      </div>
      <div class="col-3 text-center">
        <img src="{{url('images/selesaiicon.png')}}" class="mx-auto d-block" alt="selesai" >
        <strong>Selesai</strong>
        <p>ambil berkas pada waktu yang ditentukan</p>
      </div>
    </div>
  </div>
</div>

<!-- slide -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('images/slide.png')}}" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption mb-3">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
          <blockquote class="blockqoute">
            <i><strong>"</strong>kemarin saya buat akte kelahiran anak saya, saya upload berkas lewat sini tanpa harus repot - repot ke kantor seperti dulu lagi<strong>"</strong> </i>
            <footer class="blockquote-footer"><strong>Bang Andi</strong></footer>
          </blockquote>
          </div>
          <div class="col-sm-3"></div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('images/slide.png')}}" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption mb-3">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
          <blockquote class="blockqoute">
            <i><strong>"</strong>Sekarang saya mengurus semua keperluan administrasi disdukcapil melalui aplikasi ini, sangat menghemat waktu dan tenaga<strong>"</strong> </i>
            <footer class="blockquote-footer"><strong>Kak Fatimah</strong></footer>
          </blockquote>
          </div>
          <div class="col-sm-3"></div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('images/slide.png')}}" alt="New York" width="1100" height="500">
      <div class="carousel-caption mb-3">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
          <blockquote class="blockqoute">
            <i><strong>"</strong>bikin KTP lebih gampang dengan adanya sistem ini. Prosesnya sangat cepat dan tepat waktu<strong>"</strong> </i>
            <footer class="blockquote-footer"><strong>Mak Akob</strong></footer>
          </blockquote>
          </div>
          <div class="col-sm-3"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- sponsor -->
<div class="sponsor container">
  <div class="row">
    <div class="col-6"> 
      <strong>Didukung oleh :</strong>
      <br>
      <img src="{{url('images/logokota.png')}}" class="mr-2 logo-sponsor" alt="">
      <img src="{{url('images/logopoli.png')}}" class="mr-2 logo-sponsor" alt="">
      <img src="{{url('images/logoti.png')}}" class="mr-2 logo-sponsor" alt="">
    </div>
    <div class="col-6">
    <strong>Disdukcapil Lhokseumawe</strong><br>
    <p class="mb-1"><i class="fas fa-landmark"></i> Jl. Stadion Mon Geudong No. 10</p>
    <p class="mb-1"><i class="fas fa-envelope"></i> disdukcapil@lhokseumawekota.go.id</p>
    <p class="mb-1"><i class="fas fa-phone"></i> (0645) 47767</p>
    </div>
  </div>
</div>

<footer class="footer mt-5">
  <div class="row py-2 footer-copyright">
    <div class="col-6">
    <div class="">© 2020 Copyright - All Right Reserved</div>
    </div>
    <div class="col-6">
      <div class="float-right">
        <i class="fab fa-twitter-square text-info mr-1"></i>
        <i class="fab fa-facebook-square text-primary mr-1"></i>
        <i class="fab fa-linkedin text-danger mr-1"></i>
        <i class="fab fa-github-square text-dark mr-1"></i>

      </div>
    </div>
  </div>
</footer>



</body>
</html>