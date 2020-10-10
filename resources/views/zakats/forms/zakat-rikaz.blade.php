<div align="center" style="width: 100%;margin: 20px 0">
  <h4 class="content-title">Zakat Rikaz</h4>
</div>
<br>
{{ Form::open(array('route' => 'zakats.payment','method' => 'get', 'onsubmit' =>'delete_params()')) }}
  <div class="form-group">
    <div class="row">
      <div class="col-12">
          <label>Harga Barang Penemuan : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" onkeyup="rikaz_calculation()" placeholder="0" name="harga-penemuan" >
          </div>

          <label>Zakat (Harga Penemuan x 20% ) : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" name="kadar-zakat" id="kadarZakat" value="0" readonly>
          </div>
      </div>
      <div class="col-12">
        @include('zakats.forms.payment-table')

        <input type="hidden" name="akad" value="zakat-rikaz" id="zakatType">
        <input type="submit" value="Bayar Zakat" class="btn main-btn btn-success single-btn text-light full-width">
      </div>

    </div> 
  </div>
{{ Form::close() }}