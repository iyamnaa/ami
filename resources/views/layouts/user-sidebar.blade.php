<div id="user-sidebar">
    <div class="content-box">
        <table>
            <tr>
                <td rowspan="2"> 
                    <img class="logo-image" src="{{ asset(Auth::user()->photo) }}" style="border-radius:100%;width:45px;height:45px">
                </td>
                <td>
                    <h5 class='text-weight-bold ml-2' style="margin-bottom:0.1rem;margin-top:1rem"> {{ substr(Auth::user()->name, 0, 14) }}</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="content-desc ml-2" style="margin-bottom:1rem"> {{ substr(Auth::user()->username, 0, 14) }}</p>
                </td>
            </tr>
        </table>
        <hr style="border: 0.5px solid #e5e5e5;margin:0">
    </div>

    <div class="user-menu">
        <ul>
            <span class="user-menu-title content-desc"> Akun Saya </span>
            <a href="{{ route('users.front', ['username' => Auth::user()->username]) }}">
            <li>
                <i class="fa fa-users"></i>
                <span class="user-menu-list"> Profil </span>
            </li>
            </a>
            <a href="{{ route('donations.index') }}"> 
            <li>
                <i class="fa fa-database"></i>
                <span class="user-menu-list"> Donasi Saya </span>
            </li>
            </a>

            <a href="{{ route('zakats.index') }}">
            <li>
                <i class="fa fa-heart"></i>
                <span class="user-menu-list"> Zakat Saya </span>
            </li>
            </a>
            <a href="{{ route('news.index') }}"> 
            <li>
                <i class="fa fa-bookmark"></i>  
                <span class="user-menu-list"> &nbsp; Wishlist </span>
            </li>
            </a>

            <span class="user-menu-title content-desc">Pengaturan Lanjut</span>
            <a href="{{ route('about') }}"> 
            <li>
                <i class="fa fa-info-circle"></i> 
                <span class="user-menu-list"> Tentang Kami </span>
            </li>
            </a>
            <a href="{{ route('user.logout') }}" class="text-danger"> 
            <li>
                <i class="fa fa-power-off"></i> 
                <span class="user-menu-list"> Logout </span>
            </li>
            </a>
        </ul>
    </div>

    <div id="hide-user-sidebar" class="mid-content" onclick="user_sidebar(false)">
        <div class="full-width mr-4">
            <h5 class="text-success" style="margin:0" align="right">
                Kembali
                <i class="fa fa-angle-right"></i>
            </h5>
        </div>  
    </div>
</div>