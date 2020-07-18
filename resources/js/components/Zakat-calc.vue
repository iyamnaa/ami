<template>
  <div>
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
                  <div class="btn btn-success btn-calc">Hitung Zakat</div>
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
          <ul>
              <li v-for="step in steps">
                  <span @click="currentStep = step">@{{ step }}</span>
              </li>
          </ul>
        </div>
      </section>

  </div>
</template>

<script>
    var StepOne = Vue.extend({
        props: ['nextStep'],
        template: '<div><h1>Step One</h1><button @click="nextStep(\'step-two\')">Next</button></div>'
    });

    var StepTwo = Vue.extend({
        props: ['nextStep'],
        template: '<div><h1>Step Two</h1><button @click="nextStep(\'step-three\')">Next</button></div>'
    });

    var StepThree = Vue.extend({
      template: '<div><h1>Step Three</h1><button>Finish</button></div>'
    });

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data () {
          return {
            steps: ['step-one', 'step-two', 'step-three'],
            currentStep: 'step-one' 
          }
        },
        components: {
            'step-one': StepOne,
            'step-two': StepTwo,
            'step-three': StepThree,
        },
        
        methods: {
            nextStep: function (step) {
                this.currentStep = step;
            }
        }
    }
</script>
