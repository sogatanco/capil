@extends('layouts.user')

@section('title', 'Dinas Kependudukan dan Catatan Sipil Kota Lhokseumawe')

@section('adds')
<script src="../vendor/techlab/smartwizard/dist/js/jquery.smartWizard.js"></script>
<link rel="stylesheet" href="../vendor/techlab/smartwizard/dist/css/smart_wizard.css">
<link rel="stylesheet" href="{{url('css/wizard.css')}}">
<script src="{{url('js/ktp.js')}}"></script> 

@endsection

@section('content')
<div class="container mt-4">
<div id="smartwizard">
    <ul>
        <li><a href="#step-1"><strong>Langkah 1</strong><br /><small>Lengkapi Data</small></a></li>
        <li><a href="#step-2"><strong>Langkah 2</strong><br /><small>Unggah Persyaratan</small></a></li>
        <li><a href="#step-3"><strong>Langkah 3</strong><br /><small>Konfirmasi</small></a></li>
    </ul>
 
    <div>
        <div id="step-1" class="">
            <form class="sogataform">
                <div class="row">
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="nik"><strong>Nomor Induk Kependudukan</strong> </label>
                            <input type="text" class="form-control" id="nik" value="{{$datauser->nik}}" name="nik" disabled>
                        </div>

                        <div class="form-group">
                            <label for="nama"> <strong>Nama Lengkap</strong></label>
                            <input type="text" class="form-control" id="nama" value="{{$datauser->nama}}" name="nama" disabled>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="tempat"><strong>Tempat</strong></label>
                                    <input type="text" class="form-control" id="tempat" value="{{$datauser->tempat}}" name="tempat" disabled>
                                </div>
                            </div>
                            <div class="col-6">
                            <div class="form-group">
                                    <label for="tgltempat"><strong>Tgl Lahir</strong></label>
                                    <input type="text" class="form-control" id="tgl_lahir" value="{{$datauser->tgl_lahir}}" name="tgl_lahir" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="jk"><strong>Jenis Kelamin</strong></label>
                                    <input type="text" class="form-control" id="jk" value="{{$datauser->jk}}" name="jk" disabled>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="agama"><strong>Agama</strong></label>
                                    <input type="text" class="form-control" id="agama" value="{{$datauser->agama}}" name="agama" disabled>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="kecamatan"><strong>Kecamatan</strong></label>
                                    <input type="text" class="form-control" id="kecamatan" value="{{$kecamatan!=null?$kecamatan->nama_kecamatan:''}}" name="kecamatan" disabled>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="gd"><strong>G. Darah</strong></label>
                                    <input type="text" class="form-control" id="gol_darah" value="{{$datauser->gol_darah}}" name="gol_darah" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gampong"><strong>Gampong</strong></label>
                            <input type="text" class="form-control" id="desa" value="{{$desa!=null?$desa->nama_desa:''}}" name="desa" disabled>
                        </div>

                        <div class="form-group">
                            <label for="alamat"><strong>Alamat</strong> </label>
                            <input type="text" class="form-control" id="alamat" value="{{$datauser->alamat}}" name="alamat" disabled>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="job"><strong>Pekerjaan</strong></label>
                                    <input type="text" class="form-control" id="pekerjaan" value="{{$datauser->pekerjaan}}" name="pekerjaan" disabled>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="status"><strong>Status</strong></label>
                                    <input type="text" class="form-control" id="status" value="{{$datauser->status}}" name="status" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
            <small class="font-italic text-danger">* untuk melengkapi data di atas, kamu harus melakukannya di menu profil</small>
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
                                <form action="" id="pengantar_ktp" >
                                {{csrf_field()}}
                                    <input type="hidden" name="jenis" value="pengantar_ktp">
                                    <input type="file" name="select_file" id="file_pengantar_ktp" style="display:none">
                                </form>
                                <a class="btn btn-sm btn-success mt-1 mr-2" id="unggah_pengantar_ktp">{{$persyaratan->pengantar_ktp=='' ? 'Upload':'Re-Upload'}}</a>
                                <a href="storage/{{$persyaratan->pengantar_ktp}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->pengantar_ktp=='' ? 'disabled':''}}" id="view_pengantar_ktp"> Lihat </a>
                            </td>
                        </tr>



                        <tr>
                            <td width="80%">
                                <li>Salinan Kartu Keluarga (KK) dalam format PDF.</li>
                            </td>
                            <td width="20%">
                                <form action="" id="kk" >
                                {{csrf_field()}}
                                    <input type="hidden" name="jenis" value="kk">
                                    <input type="file" name="select_file" id="file_kk" style="display:none">
                                </form>
                                <a class="btn btn-sm btn-success mt-1 mr-2" id="unggah_kk">{{$persyaratan->kk=='' ? 'Upload':'Re-Upload'}}</a>
                                <a href="storage/{{$persyaratan->kk}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->kk=='' ? 'disabled':''}}" id="view_kk"> Lihat </a>
                            </td>
                        </tr>


                        <tr>
                            <td width="80%">
                                <li>Salinan Akte Kelahiran dalam format PDF.</li>
                            </td>
                            <td width="20%">
                                <form action="" id="akte_kelahiran" >
                                {{csrf_field()}}
                                    <input type="hidden" name="jenis" value="akte_kelahiran">
                                    <input type="file" name="select_file" id="file_akte_kelahiran" style="display:none">
                                </form>
                                <a class="btn btn-sm btn-success mt-1 mr-2" id="unggah_akte_kelahiran">{{$persyaratan->akte_kelahiran=='' ? 'Upload':'Re-Upload'}}</a>
                                <a href="storage/{{$persyaratan->akte_kelahiran}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->akte_kelahiran=='' ? 'disabled':''}}" id="view_akte_kelahiran"> Lihat </a>
                            </td>
                        </tr>
                        <tr>
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
            <div class="container">
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

                <ol>
                    <table class="mt-4" width="100%">
                        <tr>
                            <td width="90%">
                                <li>Surat pengantar dari Kepala Desa (GEUCHIK) setempat di scan dalam bentuk PDF.</li>
                            </td>
                            <td width="10%">
                                <a href="storage/{{$persyaratan->pengantar_ktp}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->pengantar_ktp=='' ? 'disabled':''}}" id="view_pengantar_ktp2"> Lihat </a>
                            </td>
                        </tr>
                        <tr>
                            <td width="90%">
                                <li>Salinan Kartu Keluarga (KK) dalam format PDF.</li>
                            </td>
                            <td width="10%">
                                <a href="storage/{{$persyaratan->kk}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->kk=='' ? 'disabled':''}}" id="view_kk2"> Lihat </a>
                            </td>
                        </tr>
                        <tr>
                            <td width="90%">
                                <li>Salinan Akte Kelahiran dalam format PDF.</li>
                            </td>
                            <td width="10%">
                                <a href="storage/{{$persyaratan->akte_kelahiran}}" target="blank" class="btn btn-sm btn-danger mt-1 {{$persyaratan->akte_kelahiran=='' ? 'disabled':''}}" id="view_akte_kelahiran2"> Lihat </a>
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
<form id="submitKtp">
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

