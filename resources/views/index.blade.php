@extends('layouts.app')

@section('stylesheet')

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">
@endsection

@section('content')
@include('layouts.navbar')
@include('layouts.modal')

<!-- Slider main container -->
  <!-- Swiper -->

<section class="ads-slider margin-navbar">
  <div class="ads-swiper swiper-container">
    <div class="swiper-wrapper text-light">
      <div class="swiper-slide mid-content">
        <img src="{{ asset('images/contoh1.jpeg') }}" style="width: 100%;height: 100%;position: absolute;">
      </div>
      <div class="swiper-slide mid-content">
        <img src="{{ asset('images/contoh2.jpeg') }}" style="width: 100%;height: 100%;position: absolute;">
      </div>
      <div class="swiper-slide mid-content">
        <img src="{{ asset('images/zakat-fitrah.jpg') }}" style="width: 100%;height: 100%;position: absolute;">
        <p>Amal Madani Indonesia</p>
      </div>
      <div class="swiper-slide mid-content">
        <img src="{{ asset('images/mosque1.jpg') }}" style="width: 100%;height: 100%;position: absolute;">
        <p>Amal Madani Indonesia</p>
      </div>
      <div class="swiper-slide mid-content">
        <img src="{{ asset('images/islam.jpg') }}" style="width: 100%;height: 100%;position: absolute;">
        <p>Amal Madani Indonesia</p>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination ads-pagination"></div>
  </div>
</section>

<section class="index-news-box">
  <div class="content-box full-content bg-light">
  <h5 class="text-bold text-success">Berkat Bantuanmu</h5>
    <div class="news-slider">
      <div class="news-swiper swiper-container">
        <div class="swiper-wrapper text-light">
          <div class="swiper-slide mid-content">
            <img src="{{ asset('images/islam.jpg') }}" style="width: 100%;height: 100%;position: absolute;">
            <p>Amal Madani Indonesia</p>
          </div>
          <div class="swiper-slide mid-content">
            <img src="{{ asset('images/zakat-fitrah.jpg') }}" style="width: 100%;height: 100%;position: absolute;">
            <p>Amal Madani Indonesia</p>
          </div>
          <div class="swiper-slide mid-content">
            <img src="{{ asset('images/fundraising-image.jpg') }}" style="width: 100%;height: 100%;position: absolute;">
            <p>Amal Madani Indonesia</p>
          </div>
          <div class="swiper-slide mid-content">
            <img src="{{ asset('images/blog-sedekah.jpg') }}" style="width: 100%;height: 100%;position: absolute;">
            <p>Amal Madani Indonesia</p>
          </div>
          <div class="swiper-slide mid-content">
            <img src="{{ asset('images/mosque1.jpg') }}" style="width: 100%;height: 100%;position: absolute;">
            <p>Amal Madani Indonesia</p>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination news-pagination"></div>
      </div>
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

<section class="index-top-campaign-box">
  <div class="content-box full-content bg-light">
  <h5 class="text-bold text-success">Top Campaign</h5>
    <div class="campaign-slider">
      <div class="campaign-swiper swiper-container">
        <div class="swiper-wrapper text-light">
          <div class="swiper-slide mid-content">

            <div class="mid-content">
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

          </div>
          <div class="swiper-slide mid-content">

            <div class="mid-content">
              <div class="campaign-box row">
                <div class="campaign-image-box col-5 col-sm-6 col-md-12">
                  <img class="campaign-image" src="{{ asset('/images/mosque1.jpg') }}">
                </div>
                <div class="campaign-info col-7 col-sm-6 col-md-12">
                  <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b><br>
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
          <div class="swiper-slide mid-content">

            <div class="mid-content">
              <div class="campaign-box row">
                <div class="campaign-image-box col-5 col-sm-6 col-md-12">
                  <img class="campaign-image" src="{{ asset('/images/islam.jpg') }}">
                </div>
                <div class="campaign-info col-7 col-sm-6 col-md-12">
                  <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b><br>
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
          <div class="swiper-slide mid-content">

            <div class="mid-content">
              <div class="campaign-box row">
                <div class="campaign-image-box col-5 col-sm-6 col-md-12">
                  <img class="campaign-image" src="{{ asset('/images/panti-asuhan.jpg') }}">
                </div>
                <div class="campaign-info col-7 col-sm-6 col-md-12">
                  <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b><br>
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
          <div class="swiper-slide mid-content">

            <div class="mid-content">
              <div class="campaign-box row">
                <div class="campaign-image-box col-5 col-sm-6 col-md-12">
                  <img class="campaign-image" src="{{ asset('/images/fundraising-image.jpg') }}">
                </div>
                <div class="campaign-info col-7 col-sm-6 col-md-12">
                  <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b><br>
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
          <!-- Add Scrollbar -->
          <div class="swiper-scrollbar campaign-scrollbar"></div>
      </div>
    </div>
  </div>
</section>

<section class="index-new-campaign-box">
  <div class="content-box bg-light row">
    <h5 class="content-title text-bold text-success col-12">Campaign Terbaru</h5>
    <div class="col-12 col-md-4 mid-content">
      <div class="campaign-box row">
        <div class="campaign-image-box col-5 col-sm-6 col-md-12">
          <img class="campaign-image" src="{{ asset('/images/mosque1.jpg') }}">
        </div>
        <div class="campaign-info col-7 col-sm-6 col-md-12">
          <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b><br>
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

    <div class="col-12 col-md-4 mid-content">
      <div class="campaign-box row">
        <div class="campaign-image-box col-5 col-sm-6 col-md-12">
          <img class="campaign-image" src="{{ asset('/images/islam.jpg') }}">
        </div>
        <div class="campaign-info  col-7 col-sm-6 col-md-12">
          <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b><br>
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

    <div class="col-12 col-md-4 mid-content">
      <div class="campaign-box row">
        <div class="campaign-image-box col-5 col-sm-6 col-md-12">
          <img class="campaign-image" src="{{ asset('/images/panti-asuhan.jpg') }}">
        </div>
        <div class="campaign-info col-7 col-sm-6 col-md-12">
          <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b><br>
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

    <div class="col-12 col-md-3 offset-md-9">
      <br>
      <a href="{{ route('campaigns.front') }}">
        <div class="btn main-btn single-btn btn-success text-light full-width">
          Tampilkan Lebih Banyak
        </div>
      </a>
    </div>
  </div>
</section>

<section class="index-zakat bg-light">
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

    <div class="col-12 col-md-3 offset-md-9 bg-light">
      <br>
      <a href="{{ route('zakats.front') }}">
        <div class="btn main-btn single-btn btn-orange text-light full-width">
          Bayar Zakat
        </div>
      </a>
    </div>
    <br>
</section>

<section class="index-about-us">
  <div class="content-box full-content bg-light d-inline">
      <div class="col-12" align="center">
        <div class="btn main-btn single-btn btn-success text-light d-inline-block" style="width: calc(100% - 55px);"> <i class="fa fa-phone"></i> &nbsp;&nbsp; Hubungi Kami </div>
        <div class="text-success mid-content" style="border:1.3px solid green;border-radius: 50%;width: 43px; height: 43px;display: inline-flex !important;"><i class="fa fa-question"></i></div>
    </div>
  </div>
</section>

@endsection


@section('javascript')
<script src="{{ asset('js/mdb.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script> 
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.ads-swiper', {
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
      hide: true,
    },
  });
</script>
@endsection
