@extends('layouts.user')

@section('title', 'Dinas Kependudukan dan Catatan Sipil Kota Lhokseumawe')

@section('adds')
<script src="{{url('js/home.js')}}"></script>
<link rel="stylesheet" href="{{url('css/home.css')}}">
@endsection

@section('content')
<div class="container">
  <div class="utama">
    <div class="field">
      <p class="text-center">
        Selamat datang kembali <strong>Wahyudin</strong><br>Mulai urus semua keperluan administrasimu disini !
      </p>
      <div class="row">
        <div class="col-4 text-center">
          <img src="{{url('images/akte.png')}}" class="akte" alt="">
          <p class="mt-2"><strong>Akte</strong></p>
        </div>
        <div class="col-4 text-center">
          <img src="{{url('images/kk.png')}}" class="kk" alt="">
          <p class="mt-2"><strong>KK</strong></p>
        </div>
        <div class="col-4 text-center">
          <img src="{{url('images/ktp.png')}}" class="ktp" alt="">
          <p class="mt-2"><strong>ktp</strong></p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- modal KTP-->
<div class="modal fade" id="modalKTP">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <h3 >Syarat - syarat penguruan E-KTP</h3>
        <ol>
          <li>Telah berusia 17 tahun.</li>
          <li>Unggah Surat Pengantar dari Kepala Desa.</li>
          <li>Unggah salinan Kartu Keluarga (KK).</li>
          <li>Unggah salinan Akte Kelahiran</li>
          <li>Surat Keterangan Pindah yang diterbitkan oleh pemerintah   Kabupaten/Kota dari daerah asal*.</li>
          <li>Surat Keterangan Datang dari Luar Negeri yang diterbitkan oleh Instansi Pelaksana bagi WNI yang datang dari Luar Negeri karena pindah**.</li>
        </ol>
        <small class="font-italic">* jika pindah ke daerah/kabupaten baru<br>** bagi yang pindah dari luar negeri</small>
        <div class="row mt-5">
          <div class="col-7"></div>
          <div class="col-5">
          <a type="button" href="{{url('ktp')}}" class="btn btn-outline-secondary btn-block">Saya Setuju</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- modal KK-->
<div class="modal fade" id="modalKK">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <h3 >Syarat - syarat penguruan Kartu Keluarga</h3>
        <ol>
          <li>Unggah Surat Pengantar dari Kepala Desa.</li>
          <li>Fotokopi buku nikah/akta perkawinan</li>
          <li>Surat keterangan pindah*</li>
        </ol>
        <small class="font-italic">* bagi anggota keluarga pendatang</small>
        <div class="row mt-5">
          <div class="col-7"></div>
          <div class="col-5">
          <a type="button" href="{{url('kk')}}" class="btn btn-outline-secondary btn-block">Saya Setuju</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- modal Akte-->
<div class="modal fade" id="modalAkte">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <h3 >Syarat - syarat penguruan Akte Kelahiran</h3>
        <ol>
          <li>Surat Keterangan Kelahiran dari Kelurahan</li>
          <li>Surat Keterangan Kelahiran dari dokter/bidan/penolong kelahiran/Nakhoda Kapal Laut atau Pilot Pesawat Terbang</li>
          <li>Surat Nikah/Akta Perkawinan orangtua</li>
        </ol>
        <div class="row mt-5">
          <div class="col-7"></div>
          <div class="col-5">
          <a type="button" href="{{url('akte')}}" class="btn btn-outline-secondary btn-block">Saya Setuju</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection