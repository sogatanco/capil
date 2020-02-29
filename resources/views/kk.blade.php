@extends('layouts.user')

@section('title', 'Dinas Kependudukan dan Catatan Sipil Kota Lhokseumawe')

@section('adds')
<script src="../vendor/techlab/smartwizard/dist/js/jquery.smartWizard.js"></script>
<link rel="stylesheet" href="../vendor/techlab/smartwizard/dist/css/smart_wizard.css">
<link rel="stylesheet" href="{{url('css/wizard.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{url('js/kk.js')}}"></script> 

@endsection

@section('content')
<div class="container mt-4">
<div id="smartwizard">
    <ul>
        <li><a href="#step-1"><strong>Langkah 1</strong><br /><small>Data Anggota Keluarga</small></a></li>
        <li><a href="#step-2"><strong>Langkah 2</strong><br /><small>Unggah Persyaratan</small></a></li>
        <li><a href="#step-3"><strong>Langkah 3</strong><br /><small>Konfirmasi</small></a></li>
    </ul>
 
    <div>
        <div id="step-1" class="">
            <div class="table-responsive mb-3">
                <table class="table ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat / Tgl Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Hubungan Keluarga</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($anggota as $ag)
                    <tr>
                        <td>{{$ag->nama}}</td>
                        <td>{{$ag->tempat}} / {{$ag->tgl_lahir}}</td>
                        <td>{{$ag->jk}}</td>
                        <td>{{$ag->agama}}</td>
                        <td>{{$ag->nama_ayah}}</td>
                        <td>{{$ag->nama_ibu}}</td>
                        <td>{{$ag->pendidikan}}</td>
                        <td>{{$ag->pekerjaan}}</td>
                        <td>{{$ag->hubungan_keluarga}}</td>
                        <td>{{$ag->status}}</td>
                        <td>
                            <form action="{{url('anggota/'.$ag->id)}}" method="post" class="d-inline">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-outline-secondary btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>

            <form class="sogataform" method="POST" action="{{url('anggota')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nama"><strong>Nama Lengkap</strong> </label>
                            <input type="text" class="form-control @if($errors->has('nama')) is-invalid @endif" id="nama" value="{{old('nama')}}" name="nama">
                            @if($errors->has('nama'))
                                <div class="invalid-feedback">{{$errors->first('nama')}}</div>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="tempat"><strong>Tempat</strong></label>
                                    <input type="text" class="form-control @if($errors->has('tempat')) is-invalid @endif" id="tempat" name="tempat" value="{{old('tempat')}}">
                                    @if($errors->has('tempat'))
                                        <div class="invalid-feedback">{{$errors->first('tempat')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                            <div class="form-group">
                                    <label for="tgltempat"><strong>Tgl Lahir</strong></label>
                                    <input type="text" id="tgl" class="datepicker form-control @if($errors->has('tgl_lahir')) is-invalid @endif" name="tgl_lahir" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-start-date="1945-01-01" value="{{old('tgl_lahir')}}">
                                    @if($errors->has('tgl_lahir'))
                                        <div class="invalid-feedback">{{$errors->first('tgl_lahir')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        


                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="jk"><strong>Jenis Kelamin</strong></label>
                                    <select class="form-control @if($errors->has('jk')) is-invalid @endif" id="jk" name="jk">
                                        <option value=""></option>
                                        <option value="laki-laki" >Laki Laki</option>
                                        <option value="perempuan" >Perempuan</option>
                                    </select>
                                    @if($errors->has('jk'))
                                        <div class="invalid-feedback">{{$errors->first('jk')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="agama"><strong>Agama</strong></label>
                                    <select class="form-control @if($errors->has('agama')) is-invalid @endif" id="agama" name="agama">
                                        <option value=""></option>
                                        <option value="islam" >islam</option>
                                        <option value="kristen" >kristen</option>
                                        <option value="katolik" >katolik</option>
                                        <option value="hindu" >hindu</option>
                                        <option value="budha">budha</option>
                                        <option value="konguchu" >konguchu</option>
                                    </select>
                                    @if($errors->has('agama'))
                                        <div class="invalid-feedback">{{$errors->first('agama')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="gd"><strong>G. Darah</strong></label>
                                    <select class="form-control @if($errors->has('gol_darah')) is-invalid @endif" id="gd" name="gol_darah">
                                        <option></option>
                                        <option value="a" >A</option>
                                        <option value="ab">AB</option>
                                        <option value="b" >B</option>
                                        <option value="o">O</option>
                                    </select>
                                    @if($errors->has('gol_darah'))
                                        <div class="invalid-feedback">{{$errors->first('gol_darah')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="ayah"><strong>Nama Ayah</strong></label>
                                    <input type="text" class="form-control @if($errors->has('ayah')) is-invalid @endif" id="ayah" name="ayah" value="{{old('ayah')}}">
                                    @if($errors->has('ayah'))
                                        <div class="invalid-feedback">{{$errors->first('ayah')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                            <div class="form-group">
                                    <label for="ibu"><strong>Nama Ibu</strong></label>
                                    <input type="text" id="ibu" class=" form-control @if($errors->has('ibu')) is-invalid @endif" name="ibu"  value="{{old('ibu')}}">
                                    @if($errors->has('ibu'))
                                        <div class="invalid-feedback">{{$errors->first('ibu')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="pendidikan"><strong>Pendidikan</strong></label>
                                    <input type="text" class="form-control @if($errors->has('pendidikan')) is-invalid @endif" id="pendidikan" name="pendidikan" value="{{old('pendidikan')}}">
                                    @if($errors->has('pendidikan'))
                                        <div class="invalid-feedback">{{$errors->first('pendidikan')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                            <div class="form-group">
                                    <label for="pekerjaan"><strong>Pekerjaan</strong></label>
                                    <input type="text" id="pekerjaan" class=" form-control @if($errors->has('pekerjaan')) is-invalid @endif" name="pekerjaan"  value="{{old('pekerjaan')}}">
                                    @if($errors->has('pekerjaan'))
                                        <div class="invalid-feedback">{{$errors->first('pekerjaan')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="hubungan"><strong>Hubungan Keluarga</strong></label>
                                    <input type="text" class="form-control @if($errors->has('hubungan')) is-invalid @endif" id="hubungan" name="hubungan" value="{{old('hubungan')}}">
                                    @if($errors->has('hubungan'))
                                        <div class="invalid-feedback">{{$errors->first('hubungan')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="status"><strong>Status</strong></label>
                                    <select class="form-control @if($errors->has('status')) is-invalid @endif" name="status" id="status">
                                        <option></option>
                                        <option value="belum_kawin" >Belum Kawin</option>
                                        <option value="kawin" >Kawin</option>
                                        <option value="janda" >Janda</option>
                                        <option value="duda" >Duda</option>
                                    </select>
                                    @if($errors->has('status'))
                                        <div class="invalid-feedback">{{$errors->first('status')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <input  type="submit" value="Tambah Data" class="btn btn-secondary btn-block mt-2" >
                    </div>
                </div>
            </form>
        </div>




        <div id="step-2" class="">
            <div class="container">
            <ol>
                    <table width="100%">


                        <tr>
                            <td width="80%">
                                <li>Surat pengantar dari Kepala Desa (GEUCHIK) setempat di scan dalam bentuk PDF.</li>
                            </td>
                            <td width="20%">
                                <form action="" id="pengantar_kk" >
                                {{csrf_field()}}
                                    <input type="hidden" name="jenis" value="pengantar_kk">
                                    <input type="file" name="select_file" id="file_pengantar_kk" style="display:none">
                                </form>
                                <a class="btn btn-sm btn-success mt-1 mr-2" id="unggah_pengantar_kk">{{$persyaratan->pengantar_kk=='' ? 'Upload':'Re-Upload'}}</a>
                                <a href="storage/{{$persyaratan->pengantar_kk}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->pengantar_kk=='' ? 'disabled':''}}" id="view_pengantar_kk"> Lihat </a>
                            </td>
                        </tr>



                        <tr>
                            <td width="80%">
                                <li>Fotocopy buku nikah / akta perkawinan</li>
                            </td>
                            <td width="20%">
                                <form action="" id="surat_nikah" >
                                {{csrf_field()}}
                                    <input type="hidden" name="jenis" value="surat_nikah">
                                    <input type="file" name="select_file" id="file_surat_nikah" style="display:none">
                                </form>
                                <a class="btn btn-sm btn-success mt-1 mr-2" id="unggah_surat_nikah">{{$persyaratan->surat_nikah=='' ? 'Upload':'Re-Upload'}}</a>
                                <a href="storage/{{$persyaratan->surat_nikah}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->surat_nikah=='' ? 'disabled':''}}" id="view_surat_nikah"> Lihat </a>
                            </td>
                        </tr>

                            <td width="80%">
                                <li>Surat Keterangan Pindah yang diterbitkan oleh pemerintah Kabupaten/Kota dari 
     daerah asal*</li>
                            </td>
                            <td width="20%">
                                <form action="" id="surat_pindah" >
                                {{csrf_field()}}
                                    <input type="hidden" name="jenis" value="surat_pindah">
                                    <input type="file" name="select_file" id="file_surat_pindah" style="display:none">
                                </form>
                                <a class="btn btn-sm btn-success mt-1 mr-2" id="unggah_surat_pindah">{{$persyaratan->surat_pindah=='' ? 'Upload':'Re-Upload'}}</a>
                                <a href="storage/{{$persyaratan->surat_pindah}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->surat_pindah=='' ? 'disabled':''}}" id="view_surat_pindah"> Lihat </a>
                            </td>
                        </tr>
                    </table>
                </ol>
                <small class="font-italic">* jika pindah ke daerah/kabupaten baru</small>
            </div>
        </div>





        <div id="step-3" class="">
            
            <div class="table-responsive mb-3">
                <table class="table ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat / Tgl Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Hubungan Keluarga</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($anggota as $ag)
                    <tr>
                        <td>{{$ag->nama}}</td>
                        <td>{{$ag->tempat}} / {{$ag->tgl_lahir}}</td>
                        <td>{{$ag->jk}}</td>
                        <td>{{$ag->agama}}</td>
                        <td>{{$ag->nama_ayah}}</td>
                        <td>{{$ag->nama_ibu}}</td>
                        <td>{{$ag->pendidikan}}</td>
                        <td>{{$ag->pekerjaan}}</td>
                        <td>{{$ag->hubungan_keluarga}}</td>
                        <td>{{$ag->status}}</td>
                        <td>
                            <form action="{{url('anggota/'.$ag->id)}}" method="post" class="d-inline">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-outline-secondary btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>

            <div class="container">
            <ol>
                    <table class="mt-4" width="100%">
                        <tr>
                            <td width="90%">
                                <li>Surat pengantar dari Kepala Desa (GEUCHIK) setempat di scan dalam bentuk PDF.</li>
                            </td>
                            <td width="10%">
                                <a href="storage/{{$persyaratan->pengantar_kk}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->pengantar_kk=='' ? 'disabled':''}}" id="view_pengantar_kk2"> Lihat </a>
                            </td>
                        </tr>
                        <tr>
                            <td width="90%">
                                <li>Fotocopy buku nikah / akta perkawinan</li>
                            </td>
                            <td width="10%">
                                <a href="storage/{{$persyaratan->surat_nikah}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->surat_nikah=='' ? 'disabled':''}}" id="view_surat_nikah2"> Lihat </a>
                            </td>
                        </tr>
                        <tr>
                            <td width="90%">
                                <li>Surat Keterangan Pindah yang diterbitkan oleh pemerintah Kabupaten/Kota dari 
     daerah asal*</li>
                            </td>
                            <td width="10%">
                                <a href="storage/{{$persyaratan->surat_pindah}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->surat_pindah=='' ? 'disabled':''}}" id="view_surat_pindah2"> Lihat </a>
                            </td>
                        </tr>
                    </table>
                </ol>
            </div>
            

        </div>



    </div>
</div>
</div>


<!-- form -->
<form id="submitKk">
{{csrf_field()}}
</form>


<!-- modal -->
<div class="modal fade" id="responModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content text-center">
            <img src="" alt="" class="mx-auto d-block" width="25%" id="submitIcon">
            <h2 class="mt-1" id="submitStatus" style="text-transform:capitalize">Success</h2>
            <p id="submitMessage">Data kamu telah tersimpan di sistem kami, silakan tunggu notifikasi untuk proses selanjutnya</p>
            <a class="btn btn-outline-secondary btn-block" id="closeModal" >OK</a>
        </div>
    </div>
</div>
@endsection

