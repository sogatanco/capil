@extends('layouts.form')

@section('title','Disdukcapil | Login Page')

@section('berang')
<h1 class=" font-weight-bold">WELCOME BACK</h1>
      <p class="mb-3">Silakan masuk dengan nomor KTP dan kata sandi anda !</p>
      <form action="">
        <fieldset class="formRow">
            <div class="formRow--item">
                <label for="nik" class="formRow--input-wrapper js-inputWrapper">
                    <input type="text" class="formRow--input js-input" id="nik" placeholder="Nomor Induk Kependudukan">
                </label>
            </div>
        </fieldset>
        <fieldset class="formRow">
            <div class="formRow--item">
                <label for="password" class="formRow--input-wrapper js-inputWrapper">
                    <input type="password" class="formRow--input js-input" id="password" placeholder="Password">
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
      @endsection