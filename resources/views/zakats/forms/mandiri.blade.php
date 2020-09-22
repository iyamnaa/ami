<div align="center" style="width: 100%;margin: 20px 0">
  <h4 class="content-title">Perhitungan Mandiri</h4>
</div>
<br>
{{ Form::open(array('route' => 'zakats.payment','method' => 'get')) }}
  <div class="form-group">
    <div class="row">
      <div class="col-12">
          <label>Zakat : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
            <input type="text" class="form-control currency" name="kadar-zakat" placeholder="0" onkeyup="mandiri_calculation(this.value)" >
          </div>
        </div>
        <div class="col-12">
        @include('zakats.forms.payment-table')

          <input type="hidden" name="akad" value="zakat-fitrah" id="zakatType">
          <input type="submit" name="" value="Bayar Zakat" class="btn main-btn btn-success single-btn text-light full-width">
      </div>

    </div> 
  </div>
{{ Form::close() }}