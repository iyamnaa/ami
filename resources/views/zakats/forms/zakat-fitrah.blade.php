<div align="center" style="width: 100%;margin: 20px 0">
  <h4 class="content-title">Zakat Fitrah</h4>
</div>
<br>
{{ Form::open(array('route' => 'zakats.payment','method' => 'get', 'onsubmit' =>'delete_params()')) }}
  <div class="form-group">
    <div class="row">
      <div class="col-12">
          <label>Harga Beras (Kg) : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" onkeyup="fitrah_calculation()" value="14000" name="harga-beras" >
          </div>

          <label>Zakat (Harga Beras x 2.5 Kg) : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" name="kadar-zakat" id="kadarZakat" value="0" readonly>
          </div>

          <label>Jumlah Anggota Keluarga : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-users"></i></div>
            </div>
          <input type="number" class="form-control" onkeyup="zakat_show()" name="qty-zakat" value="1" >
          </div>
      </div>
      <div class="col-12">
      @include('zakats.forms.payment-table')

        <input type="hidden" name="akad" value="zakat-fitrah" id="zakatType">
        <input type="submit" value="Bayar Zakat" class="btn main-btn btn-success single-btn text-light full-width">
      </div>

    </div> 
  </div>
{{ Form::close() }}