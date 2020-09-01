@extends('layouts.app')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">
@endsection

@section('content')
@extends('layouts.navbar')

<div class="mobile-filter-button mobile-only">
  <div type="button" class="filter-btn btn-orange text-light mid-content" data-toggle="modal" data-target="#exampleModalLong" onclick="call_donation_list()">
    <i class="fa fa-database"></i>
  </div>
</div>

<section class="campaign-detail">
  <div class="container">
    <div style="transform: translateY(-30px);" class="text-primary">
      <a href="{{ route('index') }}" class="text-primary hovering-link">Home </a> >
      <a href="{{ route('campaigns.front') }}" class="text-primary hovering-link">Campaign </a> >
      <a href="{{ url('/campaign/$campaign->id') }}" class="text-primary hovering-link"> {{ $campaign->title }} </a>
    </div>
    <div class="row mobile-align-center">
      <input type="hidden" value="{{ $campaign->id }}" id="cid">
      <input type="hidden" value="1" id="uid">
      <div class="col-12 col-md-8">
        <div class="campaign-info-box bg-light">
          <div class="content-box">
            <div class="campaign-info-image">
              <img class="campaign-full-image" src="{{ asset($campaign->image_cover) }}">
            </div>
            <div class="campaign-info-desc">
              <h3 style="margin-bottom: 2px"> {{ $campaign->title }}</h3>
              <a href="#" class="text-primary hovering-link"> {{ $campaign->user->name }} </a>
              <div class="content-box no-padd" style="margin-top: 16px;">
                <p class="content-desc">
                    {{ $campaign->short_desc }}
                </p>
                <span class="content-desc"> Dibuat Tanggal &nbsp; : </span><span class="text-primary"> {{ $campaign->created_at }} </span><br>
                <span class="content-desc"> Sisa Waktu &nbsp; : </span><span class="text-primary"> {{ $campaign->getCampaignDeadline($campaign->deadline) }} </span><br>

                <div class="btn main-btn single-btn btn-success text-light form" style="margin-top: 16px" id="add-wishlist">
                  <i class="fa fa-bookmark"></i> &nbsp; Simpan Campaign
                </div>
              </div>
            </div>
            <div class="campaign-info-setting">
              <div class="content-box no-padd">
                <ul class="menu-list mobile-menu-list text-primary">
                  <li class="show-body" style="border-bottom: 1px solid royalblue">Detail</li>
                  <li class="show-updates" style=""> Update({{ count($updates) }})</li>
                </ul>
              </div>
            </div>
            <div class="campaign-info-detail" align="left">
              <div class="campaign-body">
              {{ $campaign->body }}
              </div>
              <div class="campaign-updates" style="display:none">
                @foreach($updates as $update)
                  <h5 class="content-title"> {{ $update->title }} </h5>
                  <p class="content-desc"> 
                    <span class="basic-body-{{$update->id}}">
                     {{ substr($update->body, 0, 5) }} <span onclick="read_more('{{ $update->id }}')" class="text-primary more-{{ $update->id }}"> Lebih banyak </span>
                    </span>
                    <span class="detail-body-{{$update->id}}" style="display:none">
                     {{ substr($update->body, 5, strlen($update->body)) }} <span onclick="read_more('{{ $update->id }}')" class="text-primary less-{{ $update->id }}"> Sembunyikan </span>
                    </span>
                  </p>
                  <p class="text-primary"> {{ $update->created_at }} </p>
                  <hr>
                @endforeach
              </div>
            </div>

            <div class="campaign-info-footer">
              <a href="{{ url('/campaign/laporkan/'.$campaign->id) }}"><div class="form btn main-btn single-btn btn-success-outline text-success" style="width: 100%">Laporkan Campaign ini</div></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="campaign-info-box content-box bg-light">
          <div class="additional-info">
            <div class="campaign-info-share">
              <div class="content-box">
                <div>
                  <h5>Bagikan Campaign ini</h5>
                  <div class="social-media-list">
                    <i class="media-share-icon fa fa-facebook"></i>
                    <i class="media-share-icon fa fa-twitter"></i>
                    <i class="media-share-icon fa fa-whatsapp"></i>
                    <i class="media-share-icon fa fa-copy"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="campaign-info-box content-box bg-light mt-4 mobile-none">
          <div class="additional-info">
            @include('donations.list')
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<br><br><br>
@endsection


@section('javascript')
<script src="{{ asset('js/mdb.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script> 
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  function call_donation_list(){
    $('#modal-include').html(`@include('donations.list')`)
  }
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
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

  $('.show-body').click(function(){
    $('.show-updates').css('border-bottom','none')
    $('.campaign-updates').hide()
    $(this).css('border-bottom', '1px solid royalblue')
    $('.campaign-body').show()
  })

  $('.show-updates').click(function(){
    $('.show-body').css('border-bottom', 'none')
    $('.campaign-body').hide()
    $(this).css('border-bottom', '1px solid royalblue')
    $('.campaign-updates').show()
  })


  $('#add-wishlist').click(function(){
    $.ajax({
      type:'POST',
      url:'/campaign/save',
      data: {
        'campaign_id' : $('#cid').val(),
        'user_id' : $('#cid').val()
      },
      success:function(data, xhr) {
        alert(data.message)
      }
    })
  })
</script>
@endsection

