@extends('layouts.app')

@push('stylesheet')
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
<div class="bg-success p-3" align="center">
  <input type="text" class="form-control" style="border-radius:24px" placeholder="Cari Topik Pertanyaan">
</div>
<div class="content-box">
  <h5 class="text-success text-bold"> Syarat dan Ketentuan </h5>
  <hr style="border-color: #38c172">
  <div class="text-center text-bold">
    <h6 class="btn-success-outline text-success pt-3 pb-3 mb-2"> Pembuatan Campaign </h6>
    <h6 class="btn-success-outline text-success pt-3 pb-3 mb-2"> Beri Donasi </h6>
    <h6 class="btn-success-outline text-success pt-3 pb-3"> Bayar Zakat </h6>
  </div>
</div>
<div class="content-box">
  <h5 class="text-success mb-4 text-bold"> Frequently Asked Questions </h5>
  @foreach($faqs as $faq)
  <a href="{{ url('faq/'.$faq->id) }}">
    <h6 class="text-success pl-2"> {{ $loop->iteration.' '.$faq->topic }} </h6>
    <hr style="border-color: #38c172">
  </a>
  @endforeach
</div>
@endsection