@extends('layouts.admin')

@section('title', 'Disdukcapil | Halaman Pengurusan')

@section('adds')
<script src="{{url('js/review.js')}}"></script>
@endsection

@section('content')
<h2>Halaman Pengurusan</h2>
<hr>

<div class="table-responsive">
    <table class="table">
         <thead>
             <tr >
                 <th>#</th>
                 <th>Nik</th>
                 <th>Jenis</th>
                 <th>created_at</th>
                 <th>Status</th>
                 <th>Tgl Ambil</th>
             </tr>
         </thead>
         <tbody>
             @foreach($pengurusan as $index=>$pg)
             <tr>
                <td>{{$index+1}}</td>
                <td>{{$pg->nik}}</td>
                <td>{{$pg->jenis}}</td>
                <td>{{$pg->created_at}}</td>
                <td>{{$pg->status}}</td>
                <td>{{$pg->ambil}}</td>
             </tr>
             @endforeach
         </tbody>
    </table>
</div>


@endsection
