@extends('layouts.app')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">

<style type="text/css">
  body{
    background-color: #fff;
  }
</style>
@endsection

@section('content')

<br><br><br>

<div class="mobile-filter-button">
  <div type="button" class="filter-btn btn-success text-light mid-content" data-toggle="modal" data-target="#exampleModalLong" onclick="call_filter_form()">
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
            @foreach($categories as $category)
              <span class="filter-category-name" onclick="filter_click(null, '{{ $category->id }}', null, null)"> {{$category->name }} </span>
            @endforeach
          </div>
        </div>

        <hr class="filter-separator">

        <div class="filter filter-by-sorting">
          <div class="filter-name"> <i class="fa fa-caret-right mobile-only"></i> Urutan </div>
          <div class="filter-content"> 
            <span class="filter-sort-name" onclick="filter_click(null, null, null, 'Trending')"> Trending </span>
            <span class="filter-sort-name" onclick="filter_click(null, null, null, 'Terbaru')"> Terbaru </span>
            <span class="filter-sort-name" onclick="filter_click(null, null, null, 'Sisa Waktu')"> Sisa Waktu </span>
            <span class="filter-sort-name" onclick="filter_click(null, null, null, 'Jumlah Donasi DESC')"> Donasi (Terbesar) </span>
            <span class="filter-sort-name" onclick="filter_click(null, null, null, 'Jumlah Donasi ASC')"> Donasi (Terkecil) </span>
          </div>
        </div>

        <hr class="filter-separator">

        <div class="filter filter-by-time">
          <div class="filter-name"> <i class="fa fa-caret-right mobile-only"></i> Waktu </div>
          <div class="filter-content"> 
            <span class="filter-time-name" onclick="filter_click(null, null, 'Semua', null)"> Tanpa Jangka Waktu </span>
            <span class="filter-time-name" onclick="filter_click(null, null, 'Sedang Berjalan', null)"> Sedang Berjalan </span>
            <span class="filter-time-name" onclick="filter_click(null, null, 'Segera Berakhir Berjalan', null)"> Segera Berakhir </span>
            <span class="filter-time-name" onclick="filter_click(null, null, 'Telah Berakhir', null)"> Telah Berakhir </span>
          </div>
        </div>

      </div>

    </div>

    <div class="col-12 col-sm-12 col-md-9">

      <div class="content-box invitation">
        <div class="content-box bg-success text-white">
          <div class="row">
            <div class="col-md-8">
              <h4 class="content-title">Mari Berdonasi</h4>
              <p> Donasi yang diberikan akan diberikan sesuai dengan Campaign yang dipilih melalui pihak Amal Madani Indonesia
                  dan setiap donasi akan dikelola dengan sebaik-baiknya  </p>
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
            @include('donations.campaign-list')
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
<script type="text/javascript">

  function call_filter_form(){
    $('#modal-include').html(`@include('layouts.modal.filter.filter')`)
  }

  function filter_click(name = null, category = null, time = null, sort = null){
    urlParams = new URL(window.location.href).searchParams

    name     = name != null ? name : urlParams.get('search-filter')
    category = category != null ? category : urlParams.get('category')
    time     = time != null ? time : urlParams.get('campaign-type')
    sort     = sort != null ? sort : urlParams.get('sort-by')

    window.location = "/campaign?search-filter=" + name + "&category=" + category + "&campaign-type=" + time + "&sort-by=" + sort
  }
</script>
@endsection
