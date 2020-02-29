
@extends('layouts.form')

@section('title','Disdukcapil | Registrasi Page')

@section('berang')
<h1 class=" font-weight-bold">REGISTRASI</h1>
      <p class="mb-3">Isi data berikut sesuai dengan data di KTP !</p>

      <form method="post" action="{{route('register')}}">

     {{ csrf_field() }}
          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="nik" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" name="nik" class=" formRow--input js-input {{$errors->has('nik')?'is-invalid':''}}" id="nik" placeholder="Nomor Induk Kependudukan" value="{{old('nik')}}">
                  </label>
                @if($errors->has('nik'))
                    <small class="float-left mt-0 ml-1 text-danger">
                        {{$errors->first('nik')}}
                    </small>
                @endif
              </div>
          </fieldset>

          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="nama" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" name="nama" class="formRow--input js-input {{$errors->has('nama')?'is-invalid':''}}" id="nama" placeholder="Nama Lengkap" value="{{old('nama')}}" >
                  </label>
                @if($errors->has('nama'))
                <small class="float-left mt-0 ml-1 text-danger">
                    {{$errors->first('nama')}}
                </small>
                @endif
              </div>
          </fieldset>

          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="nama" class="formRow--input-wrapper js-inputWrapper">
                      <input type="password" name="password" class="formRow--input js-input {{$errors->has('password')?'is-invalid':''}}" id="nama" placeholder="Password">
                  </label>
                @if($errors->has('password'))
                <small class="float-left mt-0 ml-1 text-danger">
                    {{$errors->first('password')}}
                </small>
                @endif
              </div>
          </fieldset>

          <fieldset class="formRow">
              <div class="formRow--item">
                  <label for="nama" class="formRow--input-wrapper js-inputWrapper">
                      <input type="password" name="password_confirmation" class="formRow--input js-input {{$errors->has('password_confirmation')?'is-invalid':''}}" id="nama" placeholder="Confirmation Password">
                  </label>
                    @if($errors->has('password_confirmation'))
                        <small class="float-left mt-0 ml-1 text-danger">
                            {{$errors->first('password_confirmation')}}
                        </small>
                    @endif
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