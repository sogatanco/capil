@extends('layouts.user')

@section('title','Disdukcapil | Riwayat Pengurusan')

@section('adds')
<link rel="stylesheet" href="{{url('css/riwayat.css')}}">
<script src="{{url('js/riwayat.js')}}"></script>
@endsection

@section('content')
<div class="container mt-3">
    <div id="tracking">
        <div class="tracking-list">

            @foreach($riwayat as $rwy)
            <div class="tracking-item view" data-id="{{$rwy->id}}">
                <div class="tracking-icon status-{{$rwy->status}}">
                </div>
                <div class="tracking-date">{{date('M d, Y', strtotime($rwy->created_at))}}<span>{{$rwy->status==null?'pending':$rwy->status}}</span></div>
                <div class="tracking-content">PENGURUSAN {{$rwy->jenis}}
                    <span>
                        @if($rwy->status=='approved')
                            Pengurusan anda sudah di verivikasi dan sedang dalam proses, silakan datang ke kantor pada {{date('d M Y', strtotime($rwy->ambil))}}
                        @endif
                        @if($rwy->status=='finished')
                            Pengurusan selesai
                        @endif
                        @if($rwy->status==null)
                            Tunggu proses verivikasi dari petugas
                        @endif
                    </span>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


<!-- modal -->
<div class="modal fade" id="detail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="title"></div>
            <div class="data"></div>
            <div class="data1"></div>
            <div class="syarat"></div>
        </div>
    </div>
</div>
@endsection