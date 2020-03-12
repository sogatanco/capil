<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/all.css')}}">
    <script src="{{url('js/app.js')}}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700i,900&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    @yield('adds')
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container">

    <a class="navbar-brand" href="#">
    <img src="{{url('images/logo.png')}}" alt="logo">
    </a>

    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('riwayat')}}">Riwayat  <span class="badge-sonar"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('profil')}}">Profil</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('content')

@include('layouts.footer')

</body>
</html>