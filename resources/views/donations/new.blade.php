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
<body style="background-color: #eef">
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


  <section class="single-form mid-content">
    <div class="container mobile-full-width" style="width: 75%">
      <div class="single-form-step">
        <div class="row mid-content">
          <div class="col-3 col-md-2 offset-md-1 mid-content current-step">
            <div class="step-circle mid-content">
              <span class="step-number">1</span>
            </div>
            <hr class="step-line">
          </div>
          <div class="col-3 col-md-2 mid-content unfinished-step">
            <div class="step-circle mid-content">
              <span class="step-number">2</span>
            </div>
            <hr class="step-line">
          </div>
          <div class="col-3 col-md-2 mid-content unfinished-step">
            <div class="step-circle mid-content">
              <span class="step-number">3</span>
            </div>
            <hr class="step-line">
          </div>
          <div class="col-3 col-md-2 mid-content unfinished-step final-step">
            <div class="step-circle mid-content">
              <span class="step-number">4</span>
            </div>
          </div>
        </div>
      </div>
      <div class="single-form-box">
        <div class="content-box full-content bg-light">
          <div class="form-header">
            <!-- <h4 class="content-title">Campaign Baru</h4> -->
            <h4 class="content-title">Pengaturan Donasi</h4>
          </div>
          <div class="form-body">
            <div class="content-box">
              <div class="form-group">
                <form>

                  <div class="row">
                    <div class="col-md-4">
                      <label for="campaignName">Nama Campaign</label>
                        <input class="form form-control form-text" name="campaign-name" id="campaignName" placeholder="Masukkan nama campaign" autocomplete="off" style="margin-bottom: 20px;">
                      <label for="campaginCategory">Jenis Campaign</label>
                        <select class="form-control" id="campaginCategory" style="margin-bottom: 20px;">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      <label for="campaignName">Nama Instansi</label>
                      <input class="form form-control form-text" name="campaign-name" id="campaignName" placeholder="Masukkan nama instansi (Optional)" autocomplete="off" style="margin-bottom: 20px;">
                    </div>
                  </div>
                  <div class="row" style="margin-top: 40px">
                    <div class="col-12 col-md-2 offset-md-8">
                      <input class="btn btn-light main-btn mobile-full-width mobile-margin-bot" type="reset" name="" value="Sebelumnya">
                    </div>
                    <div class="col-12 col-md-2">
                      <input class="btn btn-success main-btn mobile-full-width" type="submit" name="" value="Selanjutnya">
                    </div>
                  </div>

<!--                   <div class="row">
                    <div class="col-md-4">
                      <label for="campaignName">Jumlah Donasi</label>
                        <input class="form form-control form-text" name="campaign-name" id="campaignName" placeholder="Donasi yang diperlukan (Rp)" autocomplete="off" style="margin-bottom: 20px;">
                      <label for="campaginCategory">Jenis Campaign</label>
                        <select class="form-control" id="campaginCategory" style="margin-bottom: 20px;">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      <label for="campaignName">Jumlah Hari</label>
                      <input class="form form-control form-text" name="campaign-name" id="campaignName" placeholder="Masukkan nama instansi (Optional)" disabled="true" style="margin-bottom: 20px;">
                    </div>
                  </div>
                  <div class="row" style="margin-top: 40px">
                    <div class="col-12 col-md-2 offset-md-8">
                      <input class="btn btn-light main-btn mobile-full-width mobile-margin-bot" type="reset" name="" value="Sebelumnya">
                    </div>
                    <div class="col-12 col-md-2">
                      <input class="btn btn-success main-btn mobile-full-width" type="submit" name="" value="Selanjutnya">
                    </div>
                  </div> -->

                  <!-- 
                  <div class="row">
                    <div class="col-md-12">
                      <label> Photo Campaign : </label>
                      <div class="file-image-box mid-content" align="center">
                        <div align="center">
                          <i class="fa fa-camera"></i><br>
                          <div class="main-btn btn btn-success text-light" style="margin-top: 10px;">
                            Upload Photo
                          </div>
                        </div>
                      </div>
                      <input type="file" name="" style="opacity: 0">
                    </div>
                  </div>
                  <div class="row" style="margin-top: 40px">
                    <div class="col-12 col-md-2 offset-md-8">
                      <input class="btn btn-light main-btn mobile-full-width mobile-margin-bot" type="reset" name="" value="Sebelumnya">
                    </div>
                    <div class="col-12 col-md-2">
                      <input class="btn btn-success main-btn mobile-full-width" type="submit" name="" value="Selanjutnya">
                    </div>
                  </div> -->

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