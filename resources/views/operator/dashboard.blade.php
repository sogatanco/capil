@extends('layouts.operator')

@section('title', 'Operator Disdukcapil | Dashboard')

@section('adds')
<link rel="stylesheet" href="{{url('css/dashboard.css')}}">
@endsection

@section('content')

      <h2>Dashboard</h2>
      <hr>


      <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fas fa-car"></i>
        <span class="count-numbers" id="jmobil">0</span>
        <span class="count-name">Bengkel</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fas fa-motorcycle"></i>
        <span class="count-numbers" id="jmotor">0</span>
        <span class="count-name">Bengkel</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fas fa-history"></i>
        <span class="count-numbers junapprove">0</span>
        <span class="count-name">Unapproved</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fas fa-users"></i>
        <span class="count-numbers" id="juser">0</span>
        <span class="count-name">Users</span>
      </div>
    </div>
  </div>

@endsection