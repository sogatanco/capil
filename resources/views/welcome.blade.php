<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/welcome.css')}}">
    <script src="{{url('js/app.js')}}"></script>
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
<div class="jumbotron" style="background-img">
Kependudukan dan Pencatatan Sipil
</div>

</body>
</html>