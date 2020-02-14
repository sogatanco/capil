<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disdukcapil | Login Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{url('js/app.js')}}"></script>
    <script src="{{url('js/form.js')}}"></script>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/form.css')}}">
    <link rel="stylesheet" href="{{url('css/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
      <h1 class=" font-weight-bold">WELCOME BACK</h1>
      <p class="mb-3">Silakan masuk dengan nomor KTP dan kata sandi anda !</p>

      <form action="">
        <fieldset class="formRow">
            <div class="formRow--item">
                <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                    <input type="text" class="formRow--input js-input" id="nama" placeholder="Nama Lengkap">
                </label>
            </div>
        </fieldset>
        <fieldset class="formRow">
            <div class="formRow--item">
                <label for="password" class="formRow--input-wrapper js-inputWrapper">
                    <input type="password" class="formRow--input js-input" id="nik" placeholder="Nomor Induk Kependudukan">
                </label>
            </div>
        </fieldset>
        <fieldset class="formRow ">
            <div class="formRow--item">
                <div class="row tombol">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6">
                      <button type="button" class="btn btn-secondary btn-block" id="tombol">Masuk </button>
                  </div>
                </div>
            </div>
        </fieldset>
      </form>
      </div>
    </div>

  </div>

</body>
</html>