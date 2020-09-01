<nav class="navbar" align="center">
  <div class="row mobile-full-width">
    <div class="col-2">
      <img class="logo-image" src="{{ asset('images/madani-logo.png') }}">
    </div>
    <div class="col-10" align="left">
      <div>
        <h5 class='text-bold' style="margin:0.2rem 0 0.1rem">Amal Madani Indonesia</h5>
        <span>Filantrophy and Humanity Indonesia</span>
      </div>
    </div>
  </div>
    <ul class="menu-list mid-content" style="height: 80%">
      <li><a href="{{ route('index') }}">Beranda</a></li>
      <li><a href="{{ route('campaigns.front') }}">Donasi</a></li>
      <li><a href="{{ route('zakats.front') }}">Zakat</a></li>
      <li><a href="{{ route('news.front') }}">Berita</a></li>
      <li><a href="{{ route('about') }}">Tentang Kami</a></li>
      @if(Auth::check())
        <li><a href="{{ url('profil/'.Auth::user()->username) }}"> Hey, {{ Auth::user()->name }} </a></li>
      @else
        <li><a href="{{ route('login') }}"> Hey, {{ Auth::user()->name }} </a></li>
      @endif
    </ul>
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
    @if (Auth::check())
      <div class="mobile-menu mid-content" onclick="user_sidebar(true)">
        <div align="center">
          <i class="menu-icon fa fa-user"></i>
          <span class="menu-name">Akun</span>
        </div>
      </div>
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