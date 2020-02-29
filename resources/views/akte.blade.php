@extends('layouts.user')

@section('title', 'Dinas Kependudukan dan Catatan Sipil Kota Lhokseumawe')

@section('adds')
<script src="../vendor/techlab/smartwizard/dist/js/jquery.smartWizard.js"></script>
<link rel="stylesheet" href="../vendor/techlab/smartwizard/dist/css/smart_wizard.css">
<link rel="stylesheet" href="{{url('css/wizard.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{url('js/akte.js')}}"></script> 

@endsection

@section('content')
<div class="container mt-4">
<div id="smartwizard">
    <ul>
        <li><a href="#step-1"><strong>Langkah 1</strong><br /><small>Data Bayi</small></a></li>
        <li><a href="#step-2"><strong>Langkah 2</strong><br /><small>Unggah Persyaratan</small></a></li>
        <li><a href="#step-3"><strong>Langkah 3</strong><br /><small>Konfirmasi</small></a></li>
    </ul>
 
    <div>
        <div id="step-1" class="">

            <form class="sogataform" id="submitAkte">
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
                            <div class="col-6">
                            <div class="form-group">
                                    <label for="anakke"><strong>Anak Ke</strong></label>
                                    <input type="text" id="anakke" class=" form-control @if($errors->has('anakke')) is-invalid @endif" name="anakke"  value="{{old('anakke')}}">
                                    @if($errors->has('anakke'))
                                        <div class="invalid-feedback">{{$errors->first('anakke')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>


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
                                <li>Surat Keterangan Kelahiran dari Kelurahan</li>
                            </td>
                            <td width="20%">
                                <form action="" id="skk_kelurahan" >
                                {{csrf_field()}}
                                    <input type="hidden" name="jenis" value="skk_kelurahan">
                                    <input type="file" name="select_file" id="file_skk_kelurahan" style="display:none">
                                </form>
                                <a class="btn btn-sm btn-success mt-1 mr-2" id="unggah_skk_kelurahan">{{$persyaratan->skk_kelurahan=='' ? 'Upload':'Re-Upload'}}</a>
                                <a href="storage/{{$persyaratan->skk_kelurahan}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->skk_kelurahan=='' ? 'disabled':''}}" id="view_skk_kelurahan"> Lihat </a>
                            </td>
                        </tr>


                        <tr>
                            <td width="80%">
                                <li>Surat Keterangan Kelahiran dari dokter/bidan/penolong kelahiran/Nakhoda Kapal Laut atau Pilot Pesawat Terbang</li>
                            </td>
                            <td width="20%">
                                <form action="" id="skk_bidan" >
                                {{csrf_field()}}
                                    <input type="hidden" name="jenis" value="skk_bidan">
                                    <input type="file" name="select_file" id="file_skk_bidan" style="display:none">
                                </form>
                                <a class="btn btn-sm btn-success mt-1 mr-2" id="unggah_skk_bidan">{{$persyaratan->skk_bidan=='' ? 'Upload':'Re-Upload'}}</a>
                                <a href="storage/{{$persyaratan->skk_bidan}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->skk_bidan=='' ? 'disabled':''}}" id="view_skk_bidan"> Lihat </a>
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

                            
                    </table>
                </ol>
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
                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Anak Ke</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="nama1"></td>
                        <td><span id="tempat1"></span> <span id="tgl_lahir1"></span></td>
                        <td id="jk1"></td>
                        <td id="ayah1"></td>
                        <td id="ibu1"></td>
                        <td id="anakke1"></td>
                    </tr>
                </tbody>
                </table>
            </div>
            

            <div class="container">
            <ol>
                    <table class="mt-4" width="100%">
                        <tr>
                            <td width="90%">
                                <li>Surat Keterangan Kelahiran dari Kelurahan</li>
                            </td>
                            <td width="10%">
                                <a href="storage/{{$persyaratan->skk_kelurahan}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->skk_kelurahan=='' ? 'disabled':''}}" id="view_skk_kelurahan2"> Lihat </a>
                            </td>
                        </tr>
                        <tr>
                            <td width="90%">
                                <li>Surat Keterangan Kelahiran dari dokter/bidan/penolong kelahiran/Nakhoda Kapal Laut atau Pilot Pesawat Terbang</li>
                            </td>
                            <td width="10%">
                                <a href="storage/{{$persyaratan->skk_bidan}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->skk_bidan=='' ? 'disabled':''}}" id="view_skk_bidan2"> Lihat </a>
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
                    </table>
                </ol>
            </div>
            

        </div>



    </div>
</div>
</div>




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

