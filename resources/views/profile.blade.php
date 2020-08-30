@extends('layouts.app')

@section('stylesheet')

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
@include('layouts.navbar')
@include('layouts.modal')

<div class="row">
    <div class="col-md-3 profile-nav" style="margin-top: 80px;">
        <div class="content-box">
          <b class="text-success">Hasil Filter</b>
          <div class="filter filter-category">
            <div class="filter-name"> Kategori </div>
            <div class="filter-content"> 
              <span class="filter-category-name"> Bencana Alam </span>
              <span class="filter-category-name"> Karya Seni </span>
              <span class="filter-category-name"> Keagamaan </span>
              <span class="filter-category-name"> Kemanusiaan </span>
              <span class="filter-category-name"> Kesehatan </span>
              <span class="filter-category-name"> Lingkungan </span>
              <span class="filter-category-name"> Panti </span>
              <span class="filter-category-name"> Pendidikan </span>
              <span class="filter-category-name"> Produk & Inovasi </span>
              <span class="filter-category-name"> Lainnya </span>
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-9" style="overflow:hidden">
      <div class="header user-header">
        <div class="header-box" style="background: url('{{ asset('images/islam.jpg') }}')">
        </div>
      </div>

      <div class="user-body">
        <div class="user-profile">
          <div class="row">
            <div class="col-md-2">
              <div class="user-profile-photo">
                <img src="{{ asset($user->photo) }}">
              </div>
            </div>
            <div class="col-md-6" style="margin-left: 40px">
              <div class="text-light user-profile-name">
                <h3 class="content-title"> {{ $user->name }} </h3>
              </div>
            </div>
            <div class="offset-1 col-md-2 mobile-none">
              <div class="user-profile-edit">
                <div class="btn form main-btn single-btn btn-success text-light">
                  Edit Profile
                </div>
              </div>
            </div>
          </div>
          <div class="content-box">
            <div class="profile-user-bio">
              <p class="content-desc" style="width: 60%"> {{ $user->bio }}</p>

              <p class="text-primary"><i class="fa fa-map-marker"></i> &nbsp; {{ $user->address }} </p>
              <p class="text-primary"><i class="fa fa-phone"></i> &nbsp; {{ $user->telephone }}</p>


              <div class="campaign-info-setting">
                <div class="content-box no-padd">
                  <ul class="menu-list mobile-menu-list text-primary">
                    <li style="border-bottom: 1px solid royalblue;">Campaign(2)</li>
                    <li>Donation(4)</li>
                  </ul>
                </div>
              </div>


                <div class="content-box">
                    <br>
                    <div class="row">
                        @include('donations.campaign-list')
                    </div>

                    <div align="right">
                      <div class="btn main-btn text-success see-more-btn">Lihat Semua >></div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
  
@endsection
