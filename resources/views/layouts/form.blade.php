<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{url('js/app.js')}}"></script>
    <script src="{{url('js/form.js')}}"></script>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/form.css')}}">
    <link rel="stylesheet" href="{{url('css/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i&display=swap" rel="stylesheet">
    @yield('adds')
</head>
<body>
  <div class="row">
    <!-- kiri-->
    <div class="col-md-6 d-none d-sm-block kiri">
      <img class="logo1" src="{{url('images/logo1.png')}}" alt="Disdukcapil" width="300px">
    </div>

    <!-- kanan -->
    <div class="col-md-6 kanan">
      <div class="berang text-center">
        @yield('berang')
      </div>
    </div>


  </div>

</body>
</html>