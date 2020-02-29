<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="{{url('js/app.js')}}"></script>
  <script src="{{url('js/admin.js')}}"></script>
  <link rel="stylesheet" href="{{url('css/app.css')}}">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{url('css/admin.css')}}">
  @yield('adds')
  <title>@yield('title')</title>
</head>
<body>

<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Disdukcapil</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="{{url('images/usericon.jpg')}}"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Bpk
            <strong>{{\Auth::guard('operator')->user()->nama}}</strong>
          </span>
          <span class="user-role">Operator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      
    
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Menu</span>
          </li>
          <li >
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Review</span>
              <span class="badge badge-pill badge-warning">new</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Kartu Tanda Penduduk

                  </a>
                </li>
                <li>
                  <a href="#">Kartu Keluarga</a>
                </li>
                <li>
                  <a href="#">Akte Kelahiran</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Process</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Kartu Tanda Penduduk</a>
                </li>
                <li>
                  <a href="#">Kartu Keluarga</a>
                </li>
                <li>
                  <a href="#">Akte Kelahiran</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Selesai</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Kartu Tanda Penduduk</a>
                </li>
                <li>
                  <a href="#">Kartu Keluarga</a>
                </li>
                <li>
                  <a href="#">Akte Kelahiran</a>
                </li>
              </ul>
            </div>
          </li>
          <li >
            <a href="{{url('operator/logout')}}">
              <i class="fa fa-tachometer-alt"></i>
              <span>Log Out</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
  </nav>
  <!-- sidebar-wrapper  -->

  <main class="page-content">
    <div class="container">

    @yield('content')

    </div>

  </main>
  <!-- page-content" -->
</div>
  
</body>
</html>