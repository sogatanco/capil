@extends('layouts.operator')

@section('title', 'Disdukcapil | Halaman Review')

@section('adds')
<script src="{{url('js/review.js')}}"></script>
@endsection

@section('content')
<h2>Halaman Proses {{$title}}</h2>
<hr>

<div class="table-responsive">
    <table class="table">
         <thead>
             <tr >
                 <th>#</th>
                 <th>NIK</th>
                 <th>Jenis</th>
                 <th>Di buat pada</th>
                 <th>Tgl Ambil</th>
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
             @foreach($process as $index => $pro)
             <tr>
                 <td>{{$index+1}}</td>
                 <td>{{$pro->nik}}</td>
                 <td>{{$pro->jenis}}</td>
                 <td>{{$pro->created_at}}</td>
                 <td>{{$pro->ambil}}</td>
                 <td>
                     <button class="btn btn-sm btn-secondary view" data-id="{{$pro->id}}">View</button>
                     <button class="btn btn-sm btn-success " onclick="event.preventDefault();document.getElementById('finish').submit();">Finish</button>
                     <form action="{{url('operator/process/finish')}}" method="post" id="finish">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$pro->id}}">
                     </form>
                 </td>
             </tr>
             @endforeach
         </tbody>
    </table>
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
