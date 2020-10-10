@extends('layouts.app')

@push('stylesheet')

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">
@endpush

@section('content')
@include('layouts.modal')
  <!-- Ukuran ratio = 16:9 -->
<section class="ads-slider">
  <div class="ads-swiper swiper-container">
    <div class="swiper-wrapper text-light">
      @foreach($ads as $ad)
        <div class="swiper-slide mid-content">
          <img src="{{ asset($ad->image_url) }}" style="width: 100%;height: 100%;position: absolute;">
        </div>
      @endpush
    </div>
    <div class="swiper-pagination ads-pagination"></div>
  </div>
</section>

<section class="section-content index-news-box">
  <div class="content-box full-content bg-light">
  <h5 class="text-weight-bold text-success">Berkat Bantuanmu</h5>
    <div class="news-slider">
      <div class="news-swiper swiper-container">
        <div class="swiper-wrapper text-light">
          @foreach($articles as $article)
          <a class="swiper-slide mid-content" href="{{ url('berita/'.$article->id) }}">
            <img src="{{ asset($article->image_cover) }}" style="width: 100%;height: 100%;position: absolute;">
          </a>
          @endforeach
        </div>
      </div>
    </div>
    <div class="mt-4 mb-2 full-width mid-content">
      <div class="swiper-pagination news-pagination"></div>
    </div>
    <div class="counted-data">
      <table class="full-content">
        <tr align="center">
          <th width="33.3%">24</th>
          <th width="33.3%">932</th>
          <th width="33.3%">42 Juta</th>
        </tr>
        <tr align="center">
          <td>Campaign</td>
          <td>Donatur</td>
          <td>Donasi</td>
        </tr>
      </table>
    </div>
  </div>
</section>

<section class="section-content bg-light">
  <div class="container-fluid pt-4 pr-2 pb-2 pl-2">
    <div class="campaign-by-category">
      <h5 class="content-title text-weight-bold text-success col-12 mt-2 mb-3">Trending Campaign</h5>
      <div class="horizontal-campaign pb-4 pl-3" style="overflow-x:auto">
        <table class="table-campaign">
          <tr>
            @foreach($topCampaigns as $topCampaign) 
              @php $campaign = $topCampaign->campaign @endphp
              <td class="pr-4">
                <a href="{{ url('/campaign/'.$campaign->id) }}">
                  <div class="campaign-box row bg-white">
                    <div class="campaign-image-box col-12">
                      <img class="campaign-image" src="{{ asset($campaign->image_cover) }}">
                    </div>
                    <div class="campaign-info col-12">
                      <div>
                        <b class="campaign-title text-success"> {{ $campaign->title}} </b>
                        <p class="campaign-category">{{ $campaign->user->name}} <i class="fa fa-check-circle text-primary verified-user"></i></p>
                        <div class="campaign-desc mb-3">
                          {!! substr($campaign->short_desc, 0 ,64) !!}
                          @if( strlen($campaign->short_desc) > 64)
                          ...
                          @endif
                        </div>
                      </div>
                      <div>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="{{ $campaign->getCampaignProgress($campaign->id, $campaign->target) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $campaign->getCampaignProgress($campaign->id, $campaign->target).'%' }}">
                            <span class="sr-only">{{ $campaign->getCampaignProgress($campaign->id, $campaign->target).'%' }} Complete</span>
                          </div>
                        </div>
                        <div>
                          <span class="campaign-progress" style="float: left;"> <span class="content-desc">Terkumpul </span><br> {{ $campaign->getCampaignDonation($campaign->id) }}</span>
                          <span class="campaign-progress" style="float: right;"> <span class="content-desc">Sisa Waktu </span><br>{{ $campaign->getCampaignDeadline($campaign->deadline) }}</span>
                        </div>
                      </div>
                    </div>
                    <br>
                  </div>
                </a>
              </td>
            @endforeach
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>

<section class="section-content index-new-campaign-box">
  <div class="content-box bg-light row">
    <h5 class="content-title text-weight-bold text-success col-12">Campaign Terbaru</h5>
    
    @foreach($newestCampaigns as $campaign)
      <div class="col-12 mid-content">
        <a href="{{ url('/campaign/'.$campaign->id) }}">
          <div class="campaign-box row">
            <div class="campaign-image-box col-6">
              <img class="campaign-image" src="{{ asset($campaign->image_cover) }}">
            </div>
            <div class="campaign-info col-6">
              <b class="campaign-title text-success">{{ $campaign->title }}</b>
              <p class="campaign-category"> {{ $campaign->user->name }} </p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $campaign->getCampaignProgress($campaign->id, $campaign->target) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $campaign->getCampaignProgress($campaign->id, $campaign->target).'%' }}">
                  <span class="sr-only">{{ $campaign->getCampaignProgress($campaign->id, $campaign->target).'%' }} Complete</span>
                </div>
              </div>
              <div>
                <span class="campaign-progress" style="float: left;"> <span class="content-desc">Terkumpul </span><br> Rp 10.000</span>
                <span class="campaign-progress" style="float: right;"> <span class="content-desc">Sisa Waktu </span><br>20 Hari</span>
              </div>
            </div>
            <br>
          </div>
        </a>
      </div>
    @endforeach

    <div class="col-12">
      <br>
      <a href="{{ route('campaigns.front') }}">
        <div class="btn main-btn single-btn btn-success text-light full-width">
          Tampilkan Lebih Banyak
        </div>
      </a>
    </div>
  </div>
</section>

<section class="section-content bg-light">
  <div class="container-fluid pt-4 pr-2 pb-2 pl-2">
    <div class="category-menu mb-3 table-hide-scrolling">
      <table style="min-height:80px;width:100%">
        <tr>
          @foreach($categories as $category)
            <td> <div class="content-menu btn-success-outline text-success" style="background-color:white" onclick="change_category({{ $category->id }})" id="category-{{ $category->id }}"> {{ $category->name }} </div> </td>
          @endforeach
        </tr>
      </table>
    </div>
    <div class="campaign-by-category" id="campaign-by-category">
      @include('campaign-by-category')
    </div>
  </div>
</section>

<section class="section-content index-zakat bg-light">
  <div class="header header-zakat">
    <div class="header-box">
      <div class="header-text">
        <div>
          <h1 class="header-title">Zakat Berkah</h1>
          <h2 class="header-sub-title">Sisihkan harta untuk semua</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 bg-light">
    <br>
    <a href="{{ route('zakats.front') }}">
      <div class="btn main-btn single-btn btn-orange text-light full-width">
        Bayar Zakat
      </div>
    </a>
  </div>
  <br>
</section>

<section class="section-content index-about-us bg-light">
  <div class="content-box full-content bg-light d-inline">
      <div class="col-12" align="center">
        <a href="https://api.whatsapp.com/send/?phone=6281310460480&text&app_absent=0">
          <div class="btn main-btn single-btn btn-success text-light d-inline-block" style="width: calc(100% - 55px);"> <i class="fa fa-phone"></i> &nbsp;&nbsp; Hubungi Kami </div>
        </a>
        <div class="text-success mid-content" style="border:1.3px solid green;border-radius: 50%;width: 43px; height: 43px;display: inline-flex !important;"><i class="fa fa-question"></i></div>
    </div>
  </div>
</section>

@endsection

@push('script')
<script src="{{ asset('js/mdb.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script> 
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.ads-swiper', {
    slidesPerView: 'auto',
    loop : true,
    pagination: {
      el: '.ads-pagination',
    },
  });

  var swiper1 = new Swiper('.news-swiper', {
    loop : true,
    slidesPerView: 'auto',
    pagination: {
      el: '.news-pagination',
    },
  });

  var swiper2 = new Swiper('.campaign-swiper', {
    loop : true,
    spaceBetween : 30,
    scrollbar: {
      el: '.campaign-scrollbar',
      type: 'fraction',
      hide: true,
    },
  });
  $(window).ready(function(){
      $('.content-menu').removeClass('bg-success text-light')
      $('#category-2').removeClass('bg-light text-dark')
      $('#category-2').addClass('bg-success text-light')
  })

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  function change_category(category){
    $.ajax({
      type:'POST',
      url:'/',
      data: {
        'category' : category
      },
      success:function(data, xhr) {
        $('.content-menu').removeClass('bg-success text-light')
        $('#category-' + category).removeClass('bg-light text-dark')
        $('#category-' + category).addClass('bg-success text-light')
        $('#campaign-by-category').html(data)
      }
    })
  }
</script>
@endpush
