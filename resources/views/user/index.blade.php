<!DOCTYPE html>
<html lang="Indonesia">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amal Madani Indonesia</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/font-awesome/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="assets/css/user.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/donation.css">
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 400px">
    <div class="modal-content">
      <section class="registration">

        <div class="modal-header">
          <h5 class="modal-title" id="pop-up-title">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form>
          <div class="modal-body">
              <div class="row">
                <div class="form-group col-10 offset-1">
                  <input type="hidden" name="outlet_id" value="1">
                  <input type="text" name="packet_name" placeholder="E-mail" class="form-control bottom-only">

                  <input type="password" name="price" placeholder="Password" class="form-control bottom-only">

                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                    <label class="custom-control-label" for="rememberMe">Remember me</label>
                  </div>
                  <br>
                  <input type="Submit" name="submit" value="Login" class="btn form main-btn single-btn btn-orange text-light" style="width: 100%">
                  <input type="Submit" name="submit" value="Buat Akun" class="btn form main-btn single-btn btn-light text-primary" style="width: 100%;margin-top: 10px">
                </div>
              </div>
              <br>
          </div>

          <div class="modal-footer">
            <div class="row" style="width: 100%;">
              <div class="col-11">
                  <div class="btn form main-btn single-btn btn-danger text-light" style="width: 100%">
                    <i class="fa fa-google"></i> &nbsp; Google
                  </div>
                  <div class="btn form main-btn single-btn btn-primary text-light" style="width: 100%;margin: 20px 0">
                    <i class="fa fa-facebook"></i> &nbsp; Facebook
                  </div>
              </div>
            </div>
          </div>

        </form>

      </section>
    </div>
  </div>
</div>

  <nav>
    <div class="navbar" align="center">
      <div>
        <img class="logo-image" src="assets/images/madani-logo.png">
      </div>
        <ul class="menu-list d-inline">
          <li><a href="index.html">Beranda</a></li>
          <li><a href="donation.html">Donasi</a></li>
          <li><a href="zakat.html">Zakat</a></li>
          <li><a href="#">Berita</a></li>
          <li><a href="#">Tentang Kami</a></li>
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
        <a href="index.html">
          <div class="mobile-menu mid-content">
            <div align="center">
              <i class="menu-icon fa fa-home"></i>
              <span class="menu-name">Beranda</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="zakat.html">
          <div class="mobile-menu mid-content">
            <div align="center">
              <i class="menu-icon fa fa-heartbeat"></i>
              <span class="menu-name">Zakat</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="#">
          <div class="mobile-menu mid-content">
            <div align="center">
              <i class="menu-icon fa fa-file-text"></i>
              <span class="menu-name">Berita</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="#">
          <div class="mobile-menu mid-content">
            <div align="center">
              <i class="menu-icon fa fa-user"></i>
              <span class="menu-name">Akun</span>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-md-3 profile-nav" style="margin-top: 80px;">
        <div class="content-box">
          <b class="text-success">Hasil Filter</b>
          <div class="filter filter-category">
            <div class="filter-name"> Kategori </div>
            <div class="filter-content"> 
              <span class="filter-category-name"> Bencana Alam </span>
              <span class="filter-category-name"> Karya Seni </span>
              <span class="filter-category-name"> Keagamaan </span>
              <span class="filter-category-name"> Kemanusiaan </span>
              <span class="filter-category-name"> Kesehatan </span>
              <span class="filter-category-name"> Lingkungan </span>
              <span class="filter-category-name"> Panti </span>
              <span class="filter-category-name"> Pendidikan </span>
              <span class="filter-category-name"> Produk & Inovasi </span>
              <span class="filter-category-name"> Lainnya </span>
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-9">
      <div class="header user-header">
        <div class="header-box">
        </div>
      </div>

      <div class="user-body">
        <div class="user-profile">
          <div class="row">
            <div class="col-md-2">
              <div class="user-profile-photo">
                <img src="assets/images/islam.jpg">
              </div>
            </div>
            <div class="col-md-6" style="margin-left: 40px">
              <div class="text-light user-profile-name">
                <h3 class="content-title">Amal Madani Indonesia</h3>
              </div>
            </div>
            <div class="offset-1 col-md-2 mobile-none">
              <div class="user-profile-edit">
                <div class="btn form main-btn single-btn btn-success text-light">
                  Edit Profile
                </div>
              </div>
            </div>
          </div>
          <div class="content-box">
            <div class="profile-user-bio">
              <p class="content-desc" style="width: 60%">Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</p>

              <p class="text-primary"><i class="fa fa-map-marker"></i> &nbsp; Jalan Babakan Ciparay, Babakan Ciparay, Bandung</p>
              <p class="text-primary"><i class="fa fa-phone"></i> &nbsp; 089636916356</p>


              <div class="campaign-info-setting">
                <div class="content-box no-padd">
                  <ul class="menu-list mobile-menu-list text-primary">
                    <li style="border-bottom: 1px solid royalblue;">Campaign(2)</li>
                    <li>Donation(4)</li>
                  </ul>
                </div>
              </div>


                <div class="content-box">
                  <br>
                  <div class="row">
                        <div class="col-md-4 mid-content">
                          <div class="campaign-box row">
                            <div class="campaign-image-box col-4 col-md-12">
                              <img class="campaign-image" src="assets/images/panti-asuhan.jpg">
                            </div>
                            <div class="campaign-info col-8 col-md-12">
                              <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b>
                              <p class="campaign-category">Kesehatan</p>
                              <p class="campaign-desc">
                                The World's only low cost portable Seawater Desalination Device. The Ultimate Survival Tool
                              </p>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                  <span class="sr-only">40% Complete</span>
                                </div>
                              </div>
                              <div>
                                <span class="campaign-progress" style="float: left;">Rp 10.000</span>
                                <span class="campaign-progress" style="float: right;">20 Hari</span>
                              </div>
                            </div>
                            <br>
                          </div>
                        </div>

                        <div class="col-md-4 mid-content">
                          <div class="campaign-box row">
                            <div class="campaign-image-box col-4 col-md-12">
                              <img class="campaign-image" src="assets/images/panti-asuhan.jpg">
                            </div>
                            <div class="campaign-info col-8 col-md-12">
                              <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b>
                              <p class="campaign-category">Kesehatan</p>
                              <p class="campaign-desc">
                                The World's only low cost portable Seawater Desalination Device. The Ultimate Survival Tool
                              </p>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                  <span class="sr-only">40% Complete</span>
                                </div>
                              </div>
                              <div>
                                <span class="campaign-progress" style="float: left;">Rp 10.000</span>
                                <span class="campaign-progress" style="float: right;">20 Hari</span>
                              </div>
                            </div>
                            <br>
                          </div>
                        </div>

                        <div class="col-md-4 mid-content">
                          <div class="campaign-box row">
                            <div class="campaign-image-box col-4 col-md-12">
                              <img class="campaign-image" src="assets/images/panti-asuhan.jpg">
                            </div>
                            <div class="campaign-info col-8 col-md-12">
                              <b class="campaign-title text-success">Panti Asuhan Bondo Wangi</b>
                              <p class="campaign-category">Kesehatan</p>
                              <p class="campaign-desc">
                                The World's only low cost portable Seawater Desalination Device. The Ultimate Survival Tool
                              </p>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                  <span class="sr-only">40% Complete</span>
                                </div>
                              </div>
                              <div>
                                <span class="campaign-progress" style="float: left;">Rp 10.000</span>
                                <span class="campaign-progress" style="float: right;">20 Hari</span>
                              </div>
                            </div>
                            <br>
                          </div>
                        </div>

                    </div>

                    <div align="right">
                      <div class="btn main-btn text-success see-more-btn">Lihat Semua >></div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
  
  <section class="about-company">
    <div class="col-md-12 no-padd">
      <div class="about-company-bg"></div>
      <div class="content-box mid-content">
        <div align="center">
          <h3 style="font-weight: bold;">Amal Madani Indonesia</h3>
          <p> Komp. Padasuka Indah No.B 11 &nbsp;&nbsp; Kota Cimahi Provinsi Jawa Barat </p>
          <p> Call Center : 022-206 65182 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              SMS Center : +62 813 1046 0480</p>
        </div>
      </div>
    </div>
  </section>

  <section class="footer">
    <div class="content-box">
      <br>
      <div class="container-fluid mid-content" style="margin-bottom: 8vh;">
        <div>
          <div class="btn main-btn single-btn"><i class="fa fa-phone"></i> &nbsp; Hubungi Kami </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5" style="text-align: justify;">
            Legalitas :
            <p>SK. Menteri Hukum dan HAM RI No. AHU - 1333.AH.01.04 tahun 2013
            Lembaga Amil Zakat SK. Kementerian Agama RI No.599 Tahun 2017 Prov. Jawa Barat<p>

            Kantor Pusat :
            <p>Komp. Padasuka Indah Noo.B 11 Kota Cimahi Provinsi Jawa Barat<br>
            Call Center : 022-206 65182<br>
            WA/SMS Center : +62 813 1046 0480</p>
          </div>
          <div class="col-md-2 offset-md-1 content-box" style="text-align: center;">
            <h4 class="content-title">Social</h4>
            <ul class="none-style-list">
              <li class="hovering-link"> Whatsapp </li>
              <li class="hovering-link"> Instagram </li>
              <li class="hovering-link"> Facebook </li>
              <li class="hovering-link"> YouTube </li>
            </ul>
          </div>
          <div class="col-md-2 content-box" style="text-align: center;">
            <h4 class="content-title">Link</h4>
            <ul class="none-style-list">
              <li> <a class="hovering-link" href="#"> Donasi </a> </li>
              <li> <a class="hovering-link" href="#"> Zakat </a> </li>
              <li> <a class="hovering-link" href="#"> Berita </a> </li>
              <li> <a class="hovering-link" href="#"> Program </a> </li>
              <li> <a class="hovering-link" href="#"> Kontak </a> </li>
              <li> <a class="hovering-link" href="#"> Tentang Kami </a> </li>
            </ul>
          </div>
          <div class="col-md-2 content-box" style="text-align: center;">
            <h4 class="content-title">Bantuan Lain</h4>
            <ul class="none-style-list">
              <li> <a class="hovering-link" href="#"> Q&A </a> </li>
              <li> <a class="hovering-link" href="#"> Newsletter </a> </li>
              <li class="text-danger"> <a href="#"> Keluar </a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/bootstrap/js/mdb.min.js"></script>
  <script type="text/javascript" src="assets/js/custom.js"></script>
  <script type="text/javascript" src="assets/js/donation.js"></script>
</body>
</html>