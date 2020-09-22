@extends('layouts.app')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
@include('layouts.modal')

<div class="row">
    <div class="col-md-12 no-padd" style="overflow:hidden">
      <div class="header user-header">
        <div class="header-box full-image" style="background: url('{{ asset($user->bg_cover) }}')">
        </div>
      </div>

      <div class="user-body bg-white" align="center">
        <div class="user-profile">
          <div class="user-profile-photo">
            <img src="{{ asset($user->photo) }}">
          </div>
          <div class="content-box" style="margin-bottom: -75px">
            <div class="full-width user-profile-name">
              <h3 class="content-title"> {{ $user->name }} </h3>
            </div>
            <div class="profile-user-bio">
              <p class="content-desc" style="width: 60%"> {{ $user->bio }}</p>

              <p class="text-primary"><i class="fa fa-map-marker"></i> &nbsp; {{ $user->address }} </p>
              <p class="text-primary"><i class="fa fa-phone"></i> &nbsp; {{ $user->telephone }}</p>

              <a href="{{ url('/profil/edit/'.$user->username) }}" class="mt-2 mobile-only">
                <div class="btn main-btn single-btn btn-success-outline text-success">Edit Profil</div>
              </a>

              <div class="user-profile-edit">
                <a href=" {{ url('/profil/edit/'.$user->username ) }} ">
                  <div class="btn form main-btn single-btn btn-success text-light">
                    Edit Profile
                  </div>
                </a>
              </div>

              <div class="campaign-info-setting">
                <div class="content-box no-padd">
                  <ul class="menu-list mobile-menu-list text-primary">
                    <li style="border-bottom: 1px solid royalblue;">Campaign( {{ count($campaigns) }} )</li>
                    <li>Donation( {{ count($donations) }} )</li>
                  </ul>
                </div>
              </div>


                <div class="content-box">
                    <div class="row mt-4">
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
