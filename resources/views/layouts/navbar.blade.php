<nav>
  <div class="navbar" align="center">
    <div>
      <img class="logo-image" src="{{ asset('images/madani-logo.png') }}">
    </div>
      <ul class="menu-list d-inline">
        <li><a href="{{ route('index') }}">Beranda</a></li>
        <li><a href="{{ route('donation.index') }}">Donasi</a></li>
        <li><a href="{{ route('alms.index') }}">Zakat</a></li>
        <li><a href="{{ route('news.index') }}">Berita</a></li>
        <li><a href="{{ route('aboutus') }}">Tentang Kami</a></li>
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
    <a href="{{ route('alms.index') }}">
      <div class="mobile-menu mid-content">
        <div align="center">
          <i class="menu-icon fa fa-heartbeat"></i>
          <span class="menu-name">Zakat</span>
        </div>
      </div>
    </a>
  </div>

  <div class="col-3">
    <a href="{{ route('news.index') }}">
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
      <a href="{{ route('user.index') }}">
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