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
    <div class="card-body pt-3 pb-5">
      <div class="alert-success pb-3 pt-4 mb-4" align="center">
        <h5>Form Pengajuan Sobat TemanBAIK</h5>
       </div>
      <label> No Telephone : </label>
      <input class="form-control mb-3" type="number" name="telephone">
      <label> No Rekening Bank : </label>
      <input class="form-control mb-3" type="number" name="rekening">
      <label> Foto Diri Pengaju : </label> <br>
      <input class="mb-3" type="file" name="foto_diri"> <br>
      <label> Photo KTP Pengaju : </label> <br>
      <input class="mb-3" type="file" name="ktp"> <br><br>
      <input type="submit" class="btn btn-success main-btn float-right" value="Kirim Permintaan">
    </div>
  </div>
</div>
  
@endsection
