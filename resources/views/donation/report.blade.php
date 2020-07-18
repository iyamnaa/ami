<!DOCTYPE html>
<html lang="Indonesia">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amal Madani Indonesia</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/font-awesome/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/donation.css">
</head>
<body style="background-color: #eef;overflow: hidden;">
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
              <div><a href="user.html"><i class="fa fa-user"></i></a></div>
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

  <div class="form-background bg-success"></div>

  <section class="single-form mid-content report-campaign">
    <div class="container">
      <div class="single-form-box" style="margin-top:64px">
        <div class="content-box full-content bg-light">
          <div class="form-header">
            <!-- <h4 class="content-title">Campaign Baru</h4> -->
            <h4 class="content-title">Laporkan Campaign</h4>
          </div>
          <div class="form-body">
            <div class="content-box">
              <div class="form-group">
                <form>

                  <div class="row">
                    <div class="col-md-4">
                      <label for="campaginCategory">Kategori Laporan</label>
                        <select class="form-control" id="campaginCategory" style="margin-bottom: 20px;">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      <label for="campaignName">Laporan : </label>
                      <textarea class="form form-control form-text" name="campaign-name" id="campaignName" style="margin-bottom: 20px;" rows="5"> </textarea>
                    </div>
                  </div>
                  <div class="row" style="margin-top: 40px">
                    <div class="col-12 col">
                      <input class="btn btn-success main-btn mobile-full-width" type="submit" name="" value="Kirim Laporan" style="width: 100%">
                    </div>
                  </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript" src="assets/js/custom.js"></script>
  <script type="text/javascript" src="assets/js/donation.js"></script>
</body>
</html>