<div class="sidebar-menu">
  <ul>
    <a href="{{ route('users.index') }}">
      <li>
        <i class="fa fa-users"></i>
        <span class="menu-list"> User </span>
      </li>
    </a>
    <a href="{{ route('donations.index') }}"> 
      <li>
        <i class="fa fa-database"></i>
        <span class="menu-list"> Donasi </span>
      </li>
    </a>

    <li class="has-sub-menu">
      <i class="fa fa-heartbeat"></i>
      <span class="menu-list"> Campaign </span>
    </li>
      <a href="{{ route('campaigns.index') }}"> 
        <li class="sub-menu">
          <i class="fa fa-home"></i>
          <span class="menu-list"> Campaign </span>
        </li>
      </a>
      <a href="{{ route('campaignCategories.index') }}"> 
        <li class="sub-menu">
          <i class="fa fa-th-list"></i>
          <span class="menu-list"> Kategori </span>
        </li>
      </a>
      <a href="{{ route('campaignReports.index') }}"> 
        <li class="sub-menu">
          <i class="fa fa-envelope"></i>
          <span class="menu-list"> Laporan </span>
        </li>
      </a>

    <a href="{{ route('zakats.index') }}">
      <li>
        <i class="fa fa-heart"></i>
        <span class="menu-list"> Zakat </span>
      </li>
     </a>
    <a href="{{ route('news.index') }}"> 
      <li>
        <i class="fa fa-file-text"></i>  
        <span class="menu-list"> Berita </span>
      </li>
     </a>
    <a href="{{ route('events.index') }}">
      <li>
        <i class="fa fa-calendar"></i> 
        <span class="menu-list"> Acara </span>
      </li>
     </a>
    <a href="{{ route('campaigns.index') }}"> 
      <li>
        <i class="fa fa-book"></i> 
        <span class="menu-list"> Laporan </span>
      </li>
     </a>
    <a href="{{ route('user.logout') }}" class="text-danger"> 
      <li>
        <i class="fa fa-power-off"></i> 
        <span class="menu-list"> Logout </span>
      </li>
     </a>
  </ul>
</div>