@extends('layouts.app')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">
@endsection

@section('content')
@extends('layouts.navbar')

<section class="campaign-detail">
  <div class="container">
    <div style="transform: translateY(-30px);" class="text-primary">
      <a href="index.html" class="text-primary hovering-link">Home </a> >
      <a href="donation.html" class="text-primary hovering-link">Campaign </a> >
      <a href="campaign.html" class="text-primary hovering-link">Pembaharuan Panti Asuhan </a>
    </div>
    <div class="row content-box bg-light mobile-full-width">
      <div class="col-12 col-md-8">
        <div class="campaign-info-box">
          <div class="content-box">
            <div class="campaign-info-image">
              <img class="campaign-image" src="assets/images/fundraising-image.jpg">
            </div>
            <div class="campaign-info-desc">
              <h3 style="margin-bottom: 2px">Perbaikan Panti Asuhan</h3>
              <a href="#" class="text-primary hovering-link">Natieq Sah Muhammad</a>
              <div class="content-box no-padd" style="margin-top: 16px;">
                <p class="content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ultricies aliquam.
                </p>
                <span class="content-desc"> Dibuat Tanggal &nbsp; : </span><span class="text-primary"> 1 September 2020 </span><br>
                <span class="content-desc"> Sisa Waktu &nbsp; : </span><span class="text-primary"> 1 Bulan 12 Hari </span><br>

                <div class="btn main-btn single-btn btn-success text-light form" style="margin-top: 16px">
                  <i class="fa fa-bookmark"></i> &nbsp; Simpan Campaign
                </div>
              </div>
            </div>
            <div class="campaign-info-setting">
              <div class="content-box no-padd">
                <ul class="menu-list mobile-menu-list text-primary">
                  <li style="border-bottom: 1px solid royalblue;">Detail</li>
                  <li>Update(4)</li>
                </ul>
              </div>
            </div>
            <div class="campaign-info-detail">
              <img src="assets/images/islam.jpg">
              <p class="content-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ultricies aliquam. 
              </p>
              <p class="content-desc">
                Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).
              </p>
            </div>

            <div class="campaign-info-footer">
              <a href="reportcampaign.html"><div class="form btn main-btn single-btn btn-success text-light" style="width: 100%">Laporkan Campaign ini</div></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content-box">
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

            <div class="campaign-info-donation">
              <div class="content-box">
                <div>
                  <h5>Donasi Terkumpul</h5>
                  <h5 class="text-">Rp60.000</h5>
                  <div class="donation-list">
                    <div class="btn main-btn single-btn btn-orange text-light form">Berikan Donasi</div>
                    <div class="donation-list-info">
                      <div class="donation-list-user">
                        <div class="row">
                          <div class="col-3 mid-content">
                            <i class="fa fa-user user-icon"></i>
                          </div>
                          <div class="col-9">
                            <div class="row donation-list-info-name">
                              Natieq Sah Muhammad
                            </div>
                            <div class="row donation-list-info-amount">
                              Rp20.000
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="donation-list-user">
                        <div class="row">
                          <div class="col-3 mid-content">
                            <i class="fa fa-user user-icon"></i>
                          </div>
                          <div class="col-9">
                            <div class="row donation-list-info-name">
                              Natieq Sah Muhammad
                            </div>
                            <div class="row donation-list-info-amount">
                              Rp20.000
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="donation-list-user">
                        <div class="row">
                          <div class="col-3 mid-content">
                            <i class="fa fa-user user-icon"></i>
                          </div>
                          <div class="col-9">
                            <div class="row donation-list-info-name">
                              Natieq Sah Muhammad
                            </div>
                            <div class="row donation-list-info-amount">
                              Rp20.000
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<br><br><br>

@endsection
