<div class="bottom-nav">
  <div class="row" style="height: 100%">
    <div class="col-3">
      <a href="{{ route('index') }}">
        <div class="mobile-menu mid-content">
          <div align="center">
            <i class="menu-icon fa fa-home d-block"></i>
            <span class="menu-name">Beranda</span>
          </div>
        </div>
      </a>
    </div>
    <div class="col-3">
      <a href="{{ route('zakats.front') }}">
        <div class="mobile-menu mid-content">
          <div align="center">
            <i class="menu-icon fa fa-heartbeat d-block"></i>
            <span class="menu-name">Zakat</span>
          </div>
        </div>
      </a>
    </div>
    <div class="col-3">
      <a href="{{ route('news.front') }}">
        <div class="mobile-menu mid-content">
          <div align="center">
            <i class="menu-icon fa fa-file-text d-block"></i>
            <span class="menu-name">Berita</span>
          </div>
        </div>
      </a>
    </div>
    <div class="col-3">
      @if (Auth::check())
        <div class="mobile-menu mid-content" onclick="user_sidebar(true)">
          <div align="center">
            <i class="menu-icon fa fa-user d-block"></i>
            <span class="menu-name">Akun</span>
          </div>
        </div>
      @else
        <div type="button" class="mobile-menu mid-content" data-toggle="modal" data-target="#exampleModalLong" onclick="call_registration_form(0)" style="background-color: white">
          <div align="center">
            <i class="menu-icon fa fa-user d-block"></i>
            <span class="menu-name">Akun</span>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>