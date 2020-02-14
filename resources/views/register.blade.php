<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disdukcapil | Registrasi Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{url('js/app.js')}}"></script>
    <script src="{{url('js/form.js')}}"></script>
    <script src="{{url('js/register.js')}}"></script>
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
      <h1 class=" font-weight-bold">REGISTRASI</h1>
      <p class="mb-3">Isi data berikut sesuai dengan data di KTP !</p>

      <form action="">
        <div class="form1">
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="nik" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" class="formRow--input js-input" id="nik" placeholder="Nomor Induk Kependudukan">
                  </label>
              </div>
          </fieldset>
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="nama" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" class="formRow--input js-input" id="nama" placeholder="Nama Lengkap">
                  </label>
              </div>
          </fieldset>
          <fieldset class="formRow ">
              <div class="formRow--item">
                  <div class="tombol">
                      <img class="float-right arrow" id="next1" src="{{url('images/right.png')}}" alt="next" width="40px;">
                  </div>
              </div>
          </fieldset>
        </div>

        <div class="form2">
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="jk" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" class="formRow--input js-input" id="jk" placeholder="Jenis Kelamin">
                  </label>
              </div>
          </fieldset>
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="ttl" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" class="formRow--input js-input" id="ttl" placeholder="Tempat / Tanggal Lahir">
                  </label>
              </div>
          </fieldset>
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="alamat" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" class="formRow--input js-input" id="alamat" placeholder="Alamat">
                  </label>
              </div>
          </fieldset>
          <fieldset class="formRow ">
              <div class="formRow--item">
                  <div class="tombol">
                      <img class="float-right arrow" id="next2" src="{{url('images/right.png')}}" alt="next" width="40px;">
                      <img class="float-left arrow" id="back1" src="{{url('images/left.png')}}" alt="back" width="40px;">
                  </div>
              </div>
          </fieldset>
        </div>

        <div class="form3">
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="password" class="formRow--input-wrapper js-inputWrapper">
                      <input type="password" class="formRow--input js-input" id="password" placeholder="Password">
                  </label>
              </div>
          </fieldset>
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="password" class="formRow--input-wrapper js-inputWrapper">
                      <input type="password" class="formRow--input js-input" id="password1" placeholder="Ulangi Password">
                  </label>
              </div>
          <fieldset class="formRow ">
              <div class="formRow--item">
                  <div class="tombol">
                      <img class="float-left arrow" id="next3" src="{{url('images/right.png')}}" alt="next" width="40px;">
                      <button type="button" class="btn btn-secondary float-right arrow" id="tombol">Daftar</button>
                  </div>
              </div>
          </fieldset>
        </div>


      </form>
      </div>
    </div>

  </div>

</body>
</html>