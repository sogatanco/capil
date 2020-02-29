@extends('layouts.user')

@section('title', 'Dinas Kependudukan dan Catatan Sipil Kota Lhokseumawe')

@section('adds')
<link rel="stylesheet" href="{{url('css/profil.css')}}">
<script src="{{url('js/profil.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h2><strong>{{$datauser->nama}}</strong><br><small>{{$datauser->nik}}</small></h2>
        </div>
        <div class="col-6 tombol">
            <a href="{{url('logout')}}" type="button" class="btn btn-danger float-right ml-2">LOG OUT</a>
            <a type="button" id="setting" class="btn btn-success float-right">SETTING</a>
        </div>
    </div>
    <table width="100%" class="data mt-4 ml-4 ">
        <tr>
            <td width="40%"><strong>Nama</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">{{$datauser->nama}}</td>
        </tr>
        <tr>
            <td width="40%"><strong>Jenis Kelamin</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">{{$datauser->jk}}</td>
        </tr>
        <tr>
            <td width="40%"><strong>TEMPAT</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">{{$datauser->tempat}}</td>
        </tr>
        <tr>
            <td width="40%"><strong>TAnggal lahir</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">{{$datauser->tgl_lahir}}</td>
        </tr>
        <tr>
            <td width="40%"><strong>Agama</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">{{$datauser->agama}}</td>
        </tr>
        <tr>
            <td width="40%"><strong>alamat</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">{{$datauser->alamat}}</td>
        </tr>
        <tr>
            <td width="40%"><strong>desa</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">{{$desa!=null?$desa->nama_desa:''}}</td>
        </tr>
        <tr>
            <td width="40%"><strong>kecamatan</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">{{$kecamatan!=null?$kecamatan->nama_kecamatan:''}}</td>
        </tr>
        <tr>
            <td width="40%"><strong>Kota</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">Lhokseumawe</td>
        </tr>
        <tr>
            <td width="40%"><strong>provinsi</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">Nanggroe Aceh Darussalam</td>
        </tr>
        <tr>
            <td width="40%"><strong>pekerjaan</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">{{$datauser->pekerjaan}}</td>
        </tr>
        <tr>
            <td width="40%"><strong>Golongan darah</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">{{$datauser->gol_darah}}</td>
        </tr>
        <tr>
            <td width="40%"><strong>status</strong></td>
            <td width="5%"><strong>:</strong></td>
            <td width="55%">{{$datauser->status}}</td>
        </tr>
    </table>
</div>

<!-- modal -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <form method="POST" action="{{url('profil')}}" class="sogataform">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nik"><strong>Nomor Induk Kependudukan</strong> </label>
                        <input type="text" class="form-control" id="nik" value="{{$datauser->nik}}" name="nik" disabled>
                    </div>

                    <div class="form-group">
                        <label for="nama"> <strong>Nama Lengkap</strong></label>
                        <input type="text" class="form-control @if($errors->has('nama')) is-invalid @endif" id="nama" name="nama" value="{{$datauser->nama}}">
                        @if($errors->has('nama'))
                            <div class="invalid-feedback">{{$errors->first('nama')}}</div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tempat"><strong>Tempat</strong></label>
                                <input type="text" class="form-control @if($errors->has('tempat')) is-invalid @endif" id="tempat" name="tempat" value="{{$datauser->tempat}}">
                                @if($errors->has('tempat'))
                                    <div class="invalid-feedback">{{$errors->first('tempat')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                                <label for="tgltempat"><strong>Tgl Lahir</strong></label>
                                <input type="text" id="tgl" class="datepicker form-control @if($errors->has('tgl_lahir')) is-invalid @endif" name="tgl_lahir" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-start-date="1945-01-01" value="{{$datauser->tgl_lahir}}">
                                @if($errors->has('tgl_lahir'))
                                    <div class="invalid-feedback">{{$errors->first('tgl_lahir')}}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jk"><strong>Jenis Kelamin</strong></label>
                                <select class="form-control @if($errors->has('jk')) is-invalid @endif" id="jk" name="jk">
                                    <option value=""></option>
                                    <option value="laki-laki" {{$datauser->jk=='laki-laki' ? 'selected':''}}>Laki Laki</option>
                                    <option value="perempuan" {{$datauser->jk=='perempuan' ? 'selected':''}}>Perempuan</option>
                                </select>
                                @if($errors->has('jk'))
                                    <div class="invalid-feedback">{{$errors->first('tempat')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="agama"><strong>Agama</strong></label>
                                <select class="form-control @if($errors->has('agama')) is-invalid @endif" id="agama" name="agama">
                                    <option value=""></option>
                                    <option value="islam" {{$datauser->agama=='islam' ? 'selected':''}}>islam</option>
                                    <option value="kristen" {{$datauser->agama=='kristen' ? 'selected':''}}>kristen</option>
                                    <option value="katolik" {{$datauser->agama=='katolik' ? 'selected':''}}>katolik</option>
                                    <option value="hindu" {{$datauser->agama=='hindu' ? 'selected':''}}>hindu</option>
                                    <option value="budha" {{$datauser->agama=='budha' ? 'selected':''}}>budha</option>
                                    <option value="konguchu" {{$datauser->agama=='konguchu' ? 'selected':''}}>konguchu</option>
                                </select>
                                @if($errors->has('agama'))
                                    <div class="invalid-feedback">{{$errors->first('tempat')}}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <label for="kecamatan"><strong>Kecamatan</strong></label>
                                <select class="form-control @if($errors->has('kecamatan')) is-invalid @endif" id="kecamatan" name='kecamatan'>
                                    <option value="0"></option>

                                    @if($kecamatan!=null)
                                        @foreach($kecamatans as $kec)
                                            <option value="{{$kec->id}}" {{$kecamatan->id==$kec->id ?'selected':''}}>{{$kec->nama_kecamatan}}</option>
                                        @endforeach
                                    @endif
                                    @if($kecamatan==null)
                                        @foreach($kecamatans as $kec)
                                            <option value="{{$kec->id}}">{{$kec->nama_kecamatan}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="gd"><strong>G. Darah</strong></label>
                                <select class="form-control @if($errors->has('go_darah')) is-invalid @endif" id="gd" name="gol_darah">
                                    <option></option>
                                    <option value="a" {{$datauser->gol_darah=='a'?'selected':''}}>A</option>
                                    <option value="ab" {{$datauser->gol_darah=='ab'?'selected':''}}>AB</option>
                                    <option value="b" {{$datauser->gol_darah=='b'?'selected':''}}>B</option>
                                    <option value="o" {{$datauser->gol_darah=='o'?'selected':''}}>O</option>
                                </select>
                                @if($errors->has('go_darah'))
                                    <div class="invalid-feedback">{{$errors->first('tempat')}}</div>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="gampong"><strong>Gampong</strong></label>
                        <select class="form-control @if($errors->has('desa')) is-invalid @endif" id="gampong" name="desa">
                            @if($desa!=null)
                                <option value="{{$desa->id}}">{{$desa->nama_desa}}</option>
                            @endif
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat"><strong>Alamat</strong> </label>
                        <input type="text" class="form-control @if($errors->has('alamat')) is-invalid @endif" id="alamat" name="alamat" value="{{$datauser->alamat}}">
                        @if($errors->has('alamat'))
                            <div class="invalid-feedback">{{$errors->first('alamat')}}</div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="job"><strong>Pekerjaan</strong></label>
                                <input type="text" class="form-control @if($errors->has('pekerjaan')) is-invalid @endif" id="job" name="pekerjaan" value="{{$datauser->pekerjaan}}">
                                @if($errors->has('pekerjaan'))
                                    <div class="invalid-feedback">{{$errors->first('pekerjaan')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="status"><strong>Status</strong></label>
                                <select class="form-control @if($errors->has('status')) is-invalid @endif" name="status" id="status">
                                    <option></option>
                                    <option value="belum_kawin" {{$datauser->status=='belum_kawin'?'selected':''}}>Belum Kawin</option>
                                    <option value="kawin" {{$datauser->status=='kawin'?'selected':''}}>Kawin</option>
                                    <option value="janda" {{$datauser->status=='janda'?'selected':''}}>Janda</option>
                                    <option value="duda" {{$datauser->status=='duda'?'selected':''}}>Duda</option>
                                </select>
                                @if($errors->has('status'))
                                    <div class="invalid-feedback">{{$errors->first('tempat')}}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        <small class="font-italic">* pengisian data secara tidak benar dapat mengakibatkan<br>lambatnya proses pengurusan administrasi anda</small>
        <div class="row mt-5">
          <div class="col-7"></div>
          <div class="col-5">
          <button type="submit"  class="btn btn-outline-secondary btn-block">Update Data</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  </form>
@endsection