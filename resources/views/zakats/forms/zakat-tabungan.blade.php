<div align="center" style="width: 100%;margin: 20px 0">
  <h4 class="content-title">Zakat Tabungan</h4>
</div>
<br>
{{ Form::open(array('route' => 'zakats.payment','method' => 'get', 'onsubmit' =>'delete_params()')) }}
  <div class="form-group">
    <div class="row">
      <div class="col-12">
          <label>Harga Emas (Gram) : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control" onkeyup="savings_calculation()" value="1035000" name="harga-emas" placeholder="0">
          </div>

          <label>Nishab (Harga Emas x 85 gram) : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control" name="nishab-zakat" placeholder="0" disabled="true">
          </div>

          <label>Banyak Tabungan : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" onkeyup="savings_calculation()" placeholder="0" name="jumlah-tabungan" >
          </div>

          <label>Zakat ( Tabugan x 2.5% ) : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" name="kadar-zakat" id="kadarZakat" id="kadarZakat" value="0" readonly>
          </div>

          <label>Jumlah Tahun : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
          <input type="number" class="form-control" onkeyup="zakat_show()" name="qty-zakat" id="qtyZakat" value="1" >
          </div>

          <br>
          <p> Perlu Membayar Zakat? &nbsp;&nbsp; <span class="text-success" id="zakatCondition"> Ya </p>
        </div>
        <div class="col-12">
        @include('zakats.forms.payment-table')

          <input type="hidden" name="akad" value="zakat-tabungan" id="zakatType">
          <input type="submit" value="Bayar Zakat" class="btn main-btn btn-success single-btn text-light full-width">
      </div>

    </div> 
  </div>
{{ Form::close() }}