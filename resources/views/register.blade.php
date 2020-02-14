
@extends('layouts.form')

@section('title','Disdukcapil | Registrasi Page')

@section('adds')
<script src="{{url('js/register.js')}}"></script>
@endsection

@section('berang')
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
                      <img class="float-left arrow" id="back2" src="{{url('images/left.png')}}" alt="next" width="40px;">
                      <button type="button" class="btn btn-secondary float-right arrow" id="tombol">Daftar</button>
                  </div>
              </div>
          </fieldset>
        </div>


      </form>
      @endsection