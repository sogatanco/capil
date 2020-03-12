@extends('layouts.operator')

@section('title', 'Operator Disdukcapil | Dashboard')

@section('adds')
<link rel="stylesheet" href="{{url('css/dashboard.css')}}">
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="{{url('js/dashboard.js')}}"></script>
@endsection

@section('content')

      <h2>Dashboard</h2>
      <hr>


      <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fas fa-file-alt"></i>
        <span class="count-numbers" id="jmobil">{{count($kk)}}</span>
        <span class="count-name">KK</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fas fa-id-card"></i>
        <span class="count-numbers" id="jmotor">{{count($ktp)}}</span>
        <span class="count-name">KTP</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fas fa-folder-open"></i>
        <span class="count-numbers junapprove">{{count($akte)}}</span>
        <span class="count-name">Akte</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fas fa-users"></i>
        <span class="count-numbers" id="juser">{{count($user)}}</span>
        <span class="count-name">Users</span>
      </div>
    </div>
  </div>

<div class="chart mt-4">
  <h4>Data seminggu terakhir</h4>
<canvas id="myChart" width="500" height="250"></canvas>
</div>


@endsection