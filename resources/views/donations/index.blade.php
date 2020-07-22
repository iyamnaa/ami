@extends('layouts.app')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">

<style type="text/css">
  body{
    background-color: #fff;
  }
</style>
@endsection

@section('content')
@include('layouts.navbar')

<br><br><br>

<div class="mobile-filter-button">
  <div type="button" class="filter-btn btn-success text-light mid-content" data-toggle="modal" data-target="#exampleModalLong">
    <i class="fa fa-search"></i>
  </div>
</div>

<section class="fundraising">
  <div class="row campaign-row">
    <div class="col-12 col-sm-12 col-md-3 campaign-filter">
      <div class="filter-box">

        <div class="filter filter-category">
        <b class="text-success">Hasil Filter</b>

          <div class="filter-name"> <i class="fa fa-caret-right mobile-only"></i> Kategori </div>
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

        <hr class="filter-separator">

        <div class="filter filter-by-sorting">
          <div class="filter-name"> <i class="fa fa-caret-right mobile-only"></i> Urutan </div>
          <div class="filter-content"> 
            <span class="filter-sort-name"> Trending </span>
            <span class="filter-sort-name"> Terbaru </span>
            <span class="filter-sort-name"> Donasi (Terbesar) </span>
            <span class="filter-sort-name"> Donasi (Terkecil) </span>
          </div>
        </div>

        <hr class="filter-separator">

        <div class="filter filter-by-time">
          <div class="filter-name"> <i class="fa fa-caret-right mobile-only"></i> Waktu </div>
          <div class="filter-content"> 
            <span class="filter-time-name"> Sedang Berjalan </span>
            <span class="filter-time-name"> Segera Berakhir </span>
            <span class="filter-time-name"> Telah Berakhir </span>
            <span class="filter-time-name"> Tanpa Jangka Waktu </span>
          </div>
        </div>

      </div>

    </div>

    <div class="col-12 col-sm-12 col-md-12">

      <div class="content-box invitation">
        <div class="content-box bg-success text-white">
          <div class="row">
            <div class="col-md-8">
              <h4 class="content-title">Mari Berdonasi</h4>
              <p> All Indiegogo projects must provide banking information, a government-issued ID, location  </p>
            </div>
            <div class="col-md-4 mid-content">
              <div class="btn main-btn bg-light text-success">
                <b>Tentang Donasi</b>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content-box search-on-desktop">
        <form>
          <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-search"></i></span>
            </div>
              <input type="text" id="searchFilter" name="search-filter" class="form-control" placeholder="Cari Campaign">
            </div>
          </div>
        </form>
      </div>

      <div class="content-box discover-campaign-box">
        <div class="discover-campaign">
          <div class="row">

            <div class="col-md-4 mid-content">
              <div class="campaign-box row">
                <div class="campaign-image-box col-5 col-sm-6 col-md-12">
                  <img class="campaign-image" src="{{ asset('/images/zakat-fitrah.jpg') }}">
                </div>
                <div class="campaign-info col-7 col-sm-6 col-md-12">
                  <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b>
                  <p class="campaign-category">Amal Madani <i class="fa fa-check-circle text-primary verified-user"></i></p>
                  <p class="campaign-desc">
                    The World's only low cost portable Seawater Desalination Device. The Ultimate Survival Tool
                  </p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                      <span class="sr-only">40% Complete</span>
                    </div>
                  </div>
                  <div>
                    <span class="campaign-progress" style="float: left;"> <span class="content-desc">Terkumpul </span><br> Rp 10.000</span>
                    <span class="campaign-progress" style="float: right;"> <span class="content-desc">Sisa Waktu </span><br>20 Hari</span>
                  </div>
                </div>
                <br>
              </div>
            </div>

            <div class="col-md-4 mid-content">
              <div class="campaign-box row">
                <div class="campaign-image-box col-5 col-sm-6 col-md-12">
                  <img class="campaign-image" src="{{ asset('/images/mosque1.jpg') }}">
                </div>
                <div class="campaign-info col-7 col-sm-6 col-md-12">
                  <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b>
                  <p class="campaign-category">Amal Madani <i class="fa fa-check-circle text-primary verified-user"></i></p>
                  <p class="campaign-desc">
                    The World's only low cost portable Seawater Desalination Device. The Ultimate Survival Tool
                  </p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                      <span class="sr-only">40% Complete</span>
                    </div>
                  </div>
                  <div>
                    <span class="campaign-progress" style="float: left;"> <span class="content-desc">Terkumpul </span><br> Rp 10.000</span>
                    <span class="campaign-progress" style="float: right;"> <span class="content-desc">Sisa Waktu </span><br>20 Hari</span>
                  </div>
                </div>
                <br>
              </div>
            </div>
            <div class="col-md-4 mid-content">
              <div class="campaign-box row">
                <div class="campaign-image-box col-5 col-sm-6 col-md-12">
                  <img class="campaign-image" src="{{ asset('/images/islam.jpg') }}">
                </div>
                <div class="campaign-info  col-7 col-sm-6 col-md-12">
                  <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b>
                  <p class="campaign-category">Amal Madani <i class="fa fa-check-circle text-primary verified-user"></i></p>
                  <p class="campaign-desc">
                    The World's only low cost portable Seawater Desalination Device. The Ultimate Survival Tool
                  </p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                      <span class="sr-only">40% Complete</span>
                    </div>
                  </div>
                  <div>
                    <span class="campaign-progress" style="float: left;"> <span class="content-desc">Terkumpul </span><br> Rp 10.000</span>
                    <span class="campaign-progress" style="float: right;"> <span class="content-desc">Sisa Waktu </span><br>20 Hari</span>
                  </div>
                </div>
                <br>
              </div>
            </div>
            <div class="col-md-4 mid-content">
              <div class="campaign-box row">
                <div class="campaign-image-box col-5 col-sm-6 col-md-12">
                  <img class="campaign-image" src="{{ asset('/images/panti-asuhan.jpg') }}">
                </div>
                <div class="campaign-info col-7 col-sm-6 col-md-12">
                  <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b>
                  <p class="campaign-category">Amal Madani <i class="fa fa-check-circle text-primary verified-user"></i></p>
                  <p class="campaign-desc">
                    The World's only low cost portable Seawater Desalination Device. The Ultimate Survival Tool
                  </p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                      <span class="sr-only">40% Complete</span>
                    </div>
                  </div>
                  <div>
                    <span class="campaign-progress" style="float: left;"> <span class="content-desc">Terkumpul </span><br> Rp 10.000</span>
                    <span class="campaign-progress" style="float: right;"> <span class="content-desc">Sisa Waktu </span><br>20 Hari</span>
                  </div>
                </div>
                <br>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection

@section('javascript')
<script src="{{ asset('js/mdb.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/donation.js') }}"></script>
@endsection
