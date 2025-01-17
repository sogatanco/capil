@extends('layouts.form')

@section('title','Disdukcapil | Admin Login')

@section('berang')
<h1 class=" font-weight-bold">ADMINISTRATOR</h1>
      <p class="mb-3">Silakan masuk dengan username dan password yang sesuai !</p>
      <form action="{{route('admin.login.submit')}}" method="POST">
      {{csrf_field()}}
        <fieldset class="formRow">
            <div class="formRow--item">
                <label for="username" class="formRow--input-wrapper js-inputWrapper">
                    <input type="text" name="username" class="formRow--input js-input" id="username" placeholder="Username">
                </label>
            </div>
        </fieldset>
        <fieldset class="formRow">
            <div class="formRow--item">
                <label for="password" class="formRow--input-wrapper js-inputWrapper">
                    <input type="password" name="password" class="formRow--input js-input" id="pass" placeholder="Password">
                </label>
            </div>
        </fieldset>
        <fieldset class="formRow ">
            <div class="formRow--item">
                <div class="row tombol">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-secondary btn-block" id="tombol">Masuk </button>
                  </div>
                </div>
            </div>
        </fieldset>
      </form>
      @endsection