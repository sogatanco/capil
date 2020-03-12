@extends('layouts.operator')

@section('title', 'Disdukcapil | Halaman Review')

@section('adds')
<script src="{{url('js/review.js')}}"></script>
@endsection

@section('content')
<h2>Halaman Review {{$title}}</h2>
<hr>

<div class="table-responsive">
    <table class="table">
         <thead>
             <tr >
                 <th>#</th>
                 <th>NIK</th>
                 <th>Jenis</th>
                 <th>Di buat pada</th>
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
             @if($antrian_1!=NULL)
             <tr>
                 <td>1</td>
                 <td>{{$antrian_1->nik}}</td>
                 <td>{{$antrian_1->jenis}}</td>
                 <td>{{$antrian_1->created_at}}</td>
                 <td>
                     <button class="btn btn-sm btn-secondary view" data-id="{{$antrian_1->id}}">View</button>
                     <button class="btn btn-sm btn-success" onclick="event.preventDefault();document.getElementById('approve').submit();">Approve</button>
                     <button class="btn btn-sm btn-danger" onclick="event.preventDefault();document.getElementById('reject').submit();">Reject</button>
                 </td>
             </tr>
             @endif
             @foreach($sisa_antrian as $index => $sisa)
             <tr class="text-muted">
                 <td>{{$index+1}}</td>
                 <td>{{$sisa->nik}}</td>
                 <td>{{$sisa->jenis}}</td>
                 <td>{{$sisa->created_at}}</td>
                 <td>
                     <button class="btn btn-sm btn-secondary disabled">View</button>
                     <button class="btn btn-sm btn-success disabled">Approve</button>
                     <button class="btn btn-sm btn-danger disabled">Reject</button>
                 </td>
             </tr>
             @endforeach
         </tbody>
    </table>
</div>

@if($antrian_1!=NULL)
<form action="{{url('operator/review/reject')}}" method="post" id="reject">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$antrian_1->id}}">
</form>

<form action="{{url('operator/review/approve')}}" method="post" id="approve">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$antrian_1->id}}">
</form>
@endif


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
