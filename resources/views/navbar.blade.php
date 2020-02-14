<head>
      <meta name="csrf-token" content="{{ csrf_token() }}">
          <link rel="stylesheet" href="{{url('css/app.css')}}">
          <link rel="stylesheet" href="{{url('css/main.css')}}">
          <script src='https://kit.fontawesome.com/a076d05399.js'></script>
          <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i&display=swap" rel="stylesheet">
</head>
    <body>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <!-- Brand/logo -->
          <a class="navbar-brand" href="logo.png"></a>
          <div class="container"><img src="images/logo.png" style="width:200px;" >
          
          <!-- Links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">NOTIFIKASI <span class="badge badge-pill badge-danger">11</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PROFIL</a>
            </li>
          </ul>
          </div>
        </nav>

        <div class="container text-center">
        <br>
        Selamat datang kembali <b>Wahyudin</b>,<br> mulai urus semua keperluan administrasimu disini</div>
        <br>
        <div class="row">
          <div class="col-sm-4 akte">
          <img src="images/akte.png" style="width:200px;" class="d-block mx-auto" >
          <div class="text"><b>Akte Kelahiran</b> </div>
          </div>

          <div class="col-sm-4 text-center">
          <img src="images/ktp.png" style="width:200px;" >
          <br>
          <b>KTP</b> 
          </div>

          <div class="col-sm-4 kk">
          <img src="images/kk.png" style="width:200px;" class="d-block mx-auto" >
          <div class="text2"><b>Kartu Keluarga</b> </div>
          </div>

        </div>
        <div class="footer">
        <div class="container">
        <p class="float-left">Copyright &copy; 2020 All Right Reserved</p>
        <P class='ml-2 float-right fab fa-facebook-square' style='font-size:20px;color:hover'></p>
        <P class='ml-2 float-right fab fa-instagram-square' style='font-size:20px;color:red'></p>
        <P class='ml-2 float-right fab fa-youtube-square' style='font-size:20px;color:red'></p>
        </div>
          

        </div>
        </div>

    </body>