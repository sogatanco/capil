
@extends('layouts.form')

@section('title','Disdukcapil | Registrasi Page')

@section('berang')
<h1 class=" font-weight-bold">REGISTRASI</h1>
      <p class="mb-3">Isi data berikut sesuai dengan data di KTP !</p>

      <form method="post" action="{{route('register')}}">

      
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="nik" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" name="nik" class="formRow--input js-input" id="nik" placeholder="Nomor Induk Kependudukan">
                  </label>
              </div>
          </fieldset>
         
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="nama" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" name="nama" class="formRow--input js-input" id="nama" placeholder="Nama Lengkap">
                  </label>
              </div>
          </fieldset>
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="nama" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" class="formRow--input js-input" id="nama" placeholder="Password">
                  </label>
              </div>
          </fieldset>
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="nama" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" class="formRow--input js-input" id="nama" placeholder="Confirmation Password">
                  </label>
              </div>
          </fieldset>
          <fieldset class="formRow ">
            <div class="formRow--item">
                <div class="row tombol">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-secondary btn-block" id="tombol">Buat Akun </button>
                  </div>
                </div>
            </div>
        </fieldset>


      </form>
      @endsection