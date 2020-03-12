@extends('layouts.admin')

@section('title', 'Disdukcapil | Halaman Operator')

@section('adds')
<script src="{{url('js/review.js')}}"></script>
@endsection

@section('content')
<h2>Halaman Operator</h2>
<hr>



<button class="btn btn-secondary mb-2" data-toggle="modal" data-target="#modal">Tambah Operator</button>

<div class="table-responsive">
    <table class="table">
         <thead>
             <tr >
                 <th>#</th>
                 <th>Nama</th>
                 <th>username</th>
                 <th>created_at</th>
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
             @foreach($operator as $index=>$opr)
             <tr>
                <td>{{$index+1}}</td>
                <td>{{$opr->nama}}</td>
                <td>{{$opr->username}}</td>
                <td>{{$opr->created_at}}</td>
                <td>
                    <form action="{{url('admin/operator/'.$opr->id)}}" method="post" class="d-inline">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                    </form>
                </td>
             </tr>
             @endforeach
         </tbody>
    </table>
</div>

<div class="modal fade" id="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <h3 class="mb-2">Tambah Operator</h3>
            <form action="{{url('admin/operator')}}" method="post" class="sogataform">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="nama"><strong>Nama Lengkap</strong> </label>
                    <input type="text" class="form-control @if($errors->has('nama')) is-invalid @endif" id="nama" value="" name="nama" style="text-transform:none !important;">
                    @if($errors->has('nama'))
                        <div class="invalid-feedback">{{$errors->first('nama')}}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="username"><strong>Username</strong> </label>
                    <input type="text" class="form-control @if($errors->has('username')) is-invalid @endif" id="username" value="" name="username" style="text-transform:none !important;" >
                    @if($errors->has('username'))
                        <div class="invalid-feedback">{{$errors->first('username')}}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password"><strong>Password</strong> </label>
                    <input type="text" class="form-control @if($errors->has('password')) is-invalid @endif" id="password" value="" name="password" style="text-transform:none !important;">
                    @if($errors->has('password'))
                        <div class="invalid-feedback">{{$errors->first('password')}}</div>
                    @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-secondary" type="submit">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
