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

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700i,900&display=swap" rel="stylesheet">
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
        <h1 class="big-title"><strong>Kependudukan</strong> dan <strong>Capil</strong> dalam genggaman </h1>
    </div>
</div>

</body>
</html>