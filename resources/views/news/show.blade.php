@extends('layouts.app')

@push('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jssocials.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/jssocials-theme-flat.css') }}" />
@endpush

@section('content') 


<div class="text-primary mt-4 mb-4">
  <a href="{{ route('index') }}" class="text-primary hovering-link">Beranda </a> >
  <a href="{{ route('news.front') }}" class="text-primary hovering-link">Berita </a> >
  <a href="{{ url('/campaign/$campaign->id') }}" class="text-primary hovering-link"> {{ $news->title }} </a>
</div>

<section class="campaign-detail">
  <div class="container bg-light">
    <div class="full-width mobile-align-center">
      <input type="hidden" value="{{ $news->id }}" id="cid">
      <input type="hidden" value="1" id="uid">
      <div>
        <div class="campaign-info-box">
          <div class="content-box">
            <div class="campaign-info-image">
              <img class="campaign-full-image" src="{{ asset($news->image_cover) }}">
            </div>
            <div class="campaign-info-desc mt-4" align="center">
              <h3 style="margin-bottom: 2px"> {{ $news->title }}</h3>
              <div class="content-box no-padd" style="margin-top: 16px;">
                <p class="content-desc">
                    {!! $news->body !!}
                </p>
                <span class="content-desc"> Dibuat Tanggal &nbsp; : </span><span class="text-primary"> {{ $news->created_at }} </span><br>
              </div>
            </div>
            <div class="campaign-info-detail" align="left">
              <div class="campaign-body">
              {!! $news->body !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="full-width mt-3">
    <div class="campaign-info-box content-box bg-light">
      <div class="additional-info">
        <div class="campaign-info-share">
          <div class="content-box">
            <div>
              <h5>Bagikan Artikel ini</h5>
              <div id="share"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<br><br><br>
@endsection


@push('script')
<script src="{{ asset('js/mdb.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script> 
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/jssocials.min.js') }} "></script>

<script>
  $("#share").jsSocials({
      shares: ["twitter", "facebook", "whatsapp"]
  });

  function read_more(id){
    element = $('.detail-body-' + id)
    if(element.css('display') == 'none'){
      element.css('display','initial')
      $('.more-' + id).css('display','none')
      $()
    }else{
      element.css('display','none')
      $('.more-' + id).css('display','initial')
    }
  }
</script>
@endpush

