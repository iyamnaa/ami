<nav>
  <div class="navbar" align="center">
    <div class="row mobile-full-width">
      <div class="col-2">
        <img class="logo-image" src="{{ asset('images/madani-logo.png') }}">
      </div>
      <div class="col-9" align="left">
        <div class="ml-2">
          <h5>Amal Madani Indonesia</h5>
          <span>Filantrophy and Humanity Indonesia</span>
        </div>
      </div>
      <div class="col-1 mobile-only" style="padding:0;padding-top:.33rem;float:right">
        <a href="{{ route('about') }}">
          <div class="mid-content" style="border-radius:100%;min-width:40px;min-height:40px;border:1px solid green">
            <i class="fa fa-info text-success"></i>
          </div>
        </a>
      </div>
    </div>
      <ul class="menu-list d-inline" style="height: 80%">
        <li><a href="{{ route('index') }}">Beranda</a></li>
        <li><a href="{{ route('campaigns.front') }}">Donasi</a></li>
        <li><a href="{{ route('zakats.front') }}">Zakat</a></li>
        <li><a href="{{ route('news.front') }}">Berita</a></li>
        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
        <li>
          <div class="account-menu bg-success text-light">
            <div><a href="#"><i class="fa fa-bookmark"></i></a></div>
            <div><a href="#"><i class="fa fa-search"></i></a></div>
            <div type="button" class="main-btn form text-center" data-toggle="modal" data-target="#exampleModalLong">
              <i class="fa fa-user"></i>
            </div>
          </div>
        </li>
      </ul>
  </div>
</nav>


<div class="bottom-nav">
<div class="row" style="height: 100%">

  <div class="col-3">
    <a href="{{ route('index') }}">
      <div class="mobile-menu mid-content">
        <div align="center">
          <i class="menu-icon fa fa-home"></i>
          <span class="menu-name">Beranda</span>
        </div>
      </div>
    </a>
  </div>

  <div class="col-3">
    <a href="{{ route('zakats.front') }}">
      <div class="mobile-menu mid-content">
        <div align="center">
          <i class="menu-icon fa fa-heartbeat"></i>
          <span class="menu-name">Zakat</span>
        </div>
      </div>
    </a>
  </div>

  <div class="col-3">
    <a href="{{ route('news.front') }}">
      <div class="mobile-menu mid-content">
        <div align="center">
          <i class="menu-icon fa fa-file-text"></i>
          <span class="menu-name">Berita</span>
        </div>
      </div>
    </a>
  </div>

  <div class="col-3">
    @if (false)
      <a href="{{ route('users.front') }}">
        <div class="mobile-menu mid-content">
          <div align="center">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-name">Akun</span>
          </div>
        </div>
      </a>
    @else
      <div type="button" class="mobile-menu mid-content" data-toggle="modal" data-target="#exampleModalLong" onclick="call_registration_form(0)" style="background-color: white">
        <div align="center">
          <i class="menu-icon fa fa-user"></i>
          <span class="menu-name">Akun</span>
        </div>
      </div>
    @endif
  </div>

</div>
</div>