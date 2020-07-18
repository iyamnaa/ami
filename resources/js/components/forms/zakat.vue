<template>
    <section class="calculator-list">
      <div class="content-box">
        <h3 class="content-title" align="center">Bayar Zakat</h3><br>
        <div class="row">

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content fitrah-logo"><i class="fa fa-heart"></i></div>
                  <div class="zakat-name">Zakat Fitrah</div>
                  <div class="zakat-desc">Each serving its own semantic purpose, with a few extras thrown in for more control.</div>
                  <div class="btn btn-success btn-calc" onclick="zakat()">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content emas-logo"><i class="fa fa-database"></i></div>
                  <div class="zakat-name">Zakat Emas</div>
                  <div class="zakat-desc">In need of a button, but not the hefty background colors they bring</div>
                  <div class="btn btn-success btn-calc">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content profesi-logo"><i class="fa fa-user-md"></i></div>
                  <div class="zakat-name">Zakat Profesi</div>
                  <div class="zakat-desc">The btn classes are designed to be used with the button element</div>
                  <div class="btn btn-success btn-calc">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content tabungan-logo"><i class="fa fa-heartbeat"></i></div>
                  <div class="zakat-name">Zakat Tabungan</div>
                  <div class="zakat-desc">or is included through alternative means, such as additional text hidden</div>
                  <div class="btn btn-success btn-calc">Hitung Zakat</div>
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
                  <div class="zakat-logo mid-content perdagangan-logo"><i class="fa fa-university"></i></div>
                  <div class="zakat-name">Zakat Perdagangan</div>
                  <div class="zakat-desc">such as screen readers. Ensure that information denoted by the color is either obvious</div>
                  <div class="btn btn-success btn-calc">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content simpanan-logo"><i class="fa fa-money"></i></div>
                  <div class="zakat-name">Zakat Simpanan</div>
                  <div class="zakat-desc">Using color to add meaning only provides a visual indication, which will not be conveyed </div>
                  <div class="btn btn-success btn-calc">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content hadiah-logo"><i class="fa fa-gift"></i></div>
                  <div class="zakat-name">Zakat Hadiah</div>
                  <div class="zakat-desc">Use Bootstrap’s custom button styles for actions in forms, dialogs, and more</div>
                  <div class="btn btn-success btn-calc">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="zakat-box">
              <div class="mid-content">
                <div class="zakat-type" align="center">
                  <div class="zakat-logo mid-content pertanian-logo"><i class="fa fa-life-ring"></i></div>
                  <div class="zakat-name">Zakat Pertanian</div>
                  <div class="zakat-desc">Each serving its own semantic purpose</div>
                  <div class="btn btn-success btn-calc">Hitung Zakat</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="payment zakat-payment">
      <div class="content-box container" id="zakat-form">
        @include('alms.forms.zakat-penghasilan')
      </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
