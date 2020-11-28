@extends('layouts.app')

@push('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">
@endpush

@section('content')
@include('layouts.modal')
<div class="container mt-4">
  <div class="card">
    <div class="card-body pt-5 pb-5" align="center">
      <img src="{{asset('images/madani-logo.png')}}" width="150px"><br>
      <div class="content-desc mt-3">
        Sobat TemanBAIK adalah user yang memiliki hak untuk mengadakan pencarian donasi di platform Amal Madani Indonesia
      </div>  
      <a href="{{ route('temanbaik.create') }}">
        <div class="btn btn-orange-outline single-btn main-btn mt-3"> Daftar Menjadi Sobat TemanBAIK </div>
      </a>
    </div>
  </div>
</div>
  
@endsection
