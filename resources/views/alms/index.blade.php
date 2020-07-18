@extends('layouts.app')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">
@endsection

@section('content')
@include('layouts.navbar')
<section class="header header-zakat">
  <div class="header-box">
    <div class="header-text">
      <div>
        <h1 class="header-title">Mari Berdonasi</h1>
        <h2 class="header-sub-title">Ayo bantu saudara kita diluar sana</h2>
      </div>
    </div>
  </div>
</section>

<section class="zakat-info-status">
  <div class="content-box">
    <div class="counted-data" style="margin:0">
      <table class="full-content">
        <tr align="center">
          <th width="33.3%">24 Juta</th>
          <th width="33.3%">93</th>
          <th width="33.3%">452</th>
        </tr>
        <tr align="center">
          <td>Himpunan</td>
          <td>Muzaki</td>
          <td>Mustahik</td>
        </tr>
      </table>
    </div>
  </div>
</section>


    <section class="calculator-list">
      <div class="content-box">
        <h3 class="content-title" align="center">Bayar Zakat</h3><br>
        <div class="row">

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content fitrah-logo" onclick="change_zakat(0)"><i class="fa fa-heart"></i></div>
                  <div class="zakat-name">Zakat Fitrah</div>
                  <div class="zakat-desc">Each serving its own semantic purpose, with a few extras thrown in for more control.</div>
                  <div class="btn btn-success btn-calc" onclick="change_zakat(0)">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content emas-logo" onclick="change_zakat(1)"><i class="fa fa-database"></i></div>
                  <div class="zakat-name">Zakat Emas</div>
                  <div class="zakat-desc">In need of a button, but not the hefty background colors they bring</div>
                  <div class="btn btn-success btn-calc"  onclick="change_zakat(1)">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content profesi-logo" onclick="change_zakat(2)"><i class="fa fa-user-md"></i></div>
                  <div class="zakat-name">Zakat Profesi</div>
                  <div class="zakat-desc">The btn classes are designed to be used with the button element</div>
                  <div class="btn btn-success btn-calc" onclick="change_zakat(2)">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content tabungan-logo" onclick="change_zakat(3)"><i class="fa fa-heartbeat"></i></div>
                  <div class="zakat-name">Zakat Tabungan</div>
                  <div class="zakat-desc">or is included through alternative means, such as additional text hidden</div>
                  <div class="btn btn-success btn-calc" onclick="change_zakat(3)">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="row">

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content perdagangan-logo" onclick="change_zakat(4)"><i class="fa fa-university"></i></div>
                  <div class="zakat-name">Zakat Perdagangan</div>
                  <div class="zakat-desc">such as screen readers. Ensure that information denoted by the color is either obvious</div>
                  <div class="btn btn-success btn-calc" onclick="change_zakat(4)">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content simpanan-logo" onclick="change_zakat(5)"><i class="fa fa-money"></i></div>
                  <div class="zakat-name">Zakat Simpanan</div>
                  <div class="zakat-desc">Using color to add meaning only provides a visual indication, which will not be conveyed </div>
                  <div class="btn btn-success btn-calc" onclick="change_zakat(5)">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content hadiah-logo" onclick="change_zakat(6)"><i class="fa fa-gift"></i></div>
                  <div class="zakat-name">Zakat Hadiah</div>
                  <div class="zakat-desc">Use Bootstrap’s custom button styles for actions in forms, dialogs, and more</div>
                  <div class="btn btn-success btn-calc" onclick="change_zakat(6)">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content pertanian-logo" onclick="change_zakat(7)"><i class="fa fa-life-ring"></i></div>
                  <div class="zakat-name">Zakat Pertanian</div>
                  <div class="zakat-desc">Each serving its own semantic purpose</div>
                  <div class="btn btn-success btn-calc" onclick="change_zakat(7)">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

      <section class="payment zakat-payment">
        <div class="content-box container zakat-form-box">
          <br>
          <div class="row text-primary">
            <div class="col-6 col-md-3 offset-md-3" align="center">
              <h5><span class="active-menu">Kalkulator</span></h5>
            </div>
            <div class="col-6 col-md-3" align="center">
              <h5><span>Hitung mandiri</span></h5>
            </div>
          </div>
          <div style="margin-top: 30px" id="zakat-form">
            @include('alms.forms.zakat-fitrah')
          </div>
        </div>
      </section>

<br>
<br>
<br>
<br>
@endsection


@section('javascript')
<script src="{{ asset('js/mdb.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/alms.js') }}"></script>
<script type="text/javascript">
  var alms_form = [
    `@include('alms.forms.zakat-fitrah')`,
    `@include('alms.forms.zakat-emas')`,
    `@include('alms.forms.zakat-profesi')`,
    `@include('alms.forms.zakat-tabungan')`,
    `@include('alms.forms.zakat-perdagangan')`,
    `@include('alms.forms.zakat-simpanan')`,
    `@include('alms.forms.zakat-hadiah')`,
    `@include('alms.forms.zakat-pertanian')`
  ]
  var form_position = ($('.zakat-form-box').eq(0).position().top - 40);

  function change_zakat(alms_number) {
    $('#zakat-form').html(alms_form[alms_number])
    $('html, body').animate({
        scrollTop: form_position
    }, 500);
  }
</script>
@endsection