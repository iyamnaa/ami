@extends('layouts.app')

@section('stylesheet')
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
<section class="tentang-amal-madani bg-white text-dark pb-4 pt-4">
  <div class="container-fluid">
    <div class="content-box">
      <div class="row">
        <div class="col-12 mt-4">
          <div class="full-width d-inline-block mb-4" align="center" style="margin-top:-40px">
              <img src="{{ asset('images/madani-logo.png') }}" width="150px">
          </div>
          <h3 class="text-weight-bold"> Amal Madani Indonesia </h3>
          <p class="content-desc text-justify mt-3 mb-4">
            Amal Madani Indonesia adalah lembaga filantropi yang bergerak dibidang sosial dan kemanusiaan. Berdiri pada bulan November 2009, Amal Madani Indonesia memiliki visi dan misi untuk menjadi lembaga management donor terpercaya guna mewujudkan masyarakat Madani yang sehat cerdas dan mandiri. <br><br>
            Amal Madani Indonesia beralamat di Komp. Padasuka Indah Blok B-11 – Kota Cimahi.
            Pada Mei 2017, Amal Madani Indonesia terdaftar secara resmi menjadi Lembaga Amil Zakat bersertifikat di bawah kementrian agama Republik Indonesia dengan sertifikat LAZ nomor 599, tahun 2017. Ada 5 rumpun program yang diusung Amal madani sebagai lembaga yang memiliki cita-cita memadanikan Indonesia melalui expresi cerdas, expresi sehat, expresi mandiri, expresi qur’ani dan expresi peduli. <br><br>
            Alhamdulillah, selama Amal Madani Indonesia berdiri hingga Oktober 2017 sudah melayani lebih dari 3 Juta penerima manfaat di tiga provinsi yaitu prov. Jawa Barat, Provinsi Banten serta Prov. DKI jakarta. Kami berharap untuk terus dapat menjadi bagian, dari perubahan Indonesia menjadi lebih baik. <br><br>
          </p>

          <table class="table-striped full-width text-center mt-4">
            <tr>
              <td class="bg-success text-light p-2" colspan="2"> Struktur Kepengurusan </td>
            </tr>
            <tr>
              <td class="p-2"> Dewan Kepengurusan </td>
              <td class="p-2"> H. Yayan Suyanto </td>
            </tr>
            <tr>
              <td class="p-2"> Dewan Syariah </td>
              <td class="p-2"> H. Dede Rodin, Lc, M.Ag  </td>
            </tr>
            <tr>
              <td class="p-2"> Dewan Syariah</td>
              <td class="p-2"> Drs. H. Dudung Kurnia  </td>
            </tr>
            <tr>
              <td class="p-2"> Direktur </td>
              <td class="p-2"> Denni Mauliya Purwana </td>
            </tr>
            <tr>
              <td class="p-2"> Kesekertariatan Lembaga </td>
              <td class="p-2"> Dewi Yulianti, A.Ma. </td>
            </tr>
            <tr>
              <td class="p-2"> Program Development </td>
              <td class="p-2"> Andri Nurdiana, A.Md.  </td>
            </tr>
            <tr>
              <td class="p-2"> Keuangan </td>
              <td class="p-2"> Vina Rakasiwi, S.E. </td>
            </tr>
            <tr>
              <td class="p-2"> Digital Fundraising </td>
              <td class="p-2"> Auliannisa Rahmania </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-company bg-success">
  <div class="col-12 no-padd">
    <div class="about-company-bg"></div>
    <div class="content-box mid-content">
      <div align="center">
        <h3 style="font-weight: bold;">Amal Madani Indonesia</h3>
        <p> Komp. Padasuka Indah No.B 11 <br> 40221 Kota Cimahi <br> Provinsi Jawa Barat </p>
        <table style="width:100%">
          <tr align="center">
            <td> Call Center </td>
            <td> SMS Center </td>
          </tr>
          <tr align="center">
            <td> 022-206 65182 </td>
            <td> +62 813 1046 0480 </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>

<section class="footer">
  <div class="content-box">
    <br>
    <div class="container-fluid mid-content" style="margin-bottom: 8vh;">
      <div>
        <div class="btn main-btn bg-success single-btn"><i class="fa fa-phone"></i> &nbsp; Hubungi Kami </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12" style="text-align: justify;">
          Legalitas :
          <p>SK. Menteri Hukum dan HAM RI No. AHU - 1333.AH.01.04 tahun 2013
          Lembaga Amil Zakat SK. Kementerian Agama RI No.599 Tahun 2017 Prov. Jawa Barat<p>

          Kantor Pusat :
          <p>Komp. Padasuka Indah Noo.B 11 Kota Cimahi Provinsi Jawa Barat<br>
          Call Center : 022-206 65182<br>
          WA/SMS Center : +62 813 1046 0480</p>
        </div>
        <div class="col-12 content-box" style="text-align: center;">
          <h4 class="content-title">Social</h4>
          <ul class="none-style-list">
            <li class="hovering-link"> Whatsapp </li>
            <li class="hovering-link"> Instagram </li>
            <li class="hovering-link"> Facebook </li>
            <li class="hovering-link"> YouTube </li>
          </ul>
        </div>
        <div class="col-12 content-box" style="text-align: center;">
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
        <div class="col-12 content-box" style="text-align: center;">
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
@endsection
