<div align="center" style="width: 100%;margin: 20px 0">
  <h4 class="content-title">Zakat Profesi</h4>
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
        <input type="text" class="form-control" onkeyup="profession_calculation()" name="harga-beras" value="14000" placeholder="0" >
        </div>

        <label>Penghasilan (Bulan) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control currency" onkeyup="profession_calculation()" name="jumlah-penghasilan" placeholder="0" required>
        </div>

        <label>Pengeluaran Pokok (Bulan) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control currency" onkeyup="profession_calculation()" name="jumlah-pengeluaran" placeholder="0">
        </div>

        <label>Nishab (Harga Beras x 552 Kg) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control" name="nishab-zakat" value="14000" placeholder="0" disabled="true">
        </div>
        
        <label>Zakat (Harga Beras x 2.5 Kg) : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" name="kadar-zakat" id="kadarZakat" value="0" readonly>
          </div>

        <label>Jumlah Bulan : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        <input type="number" class="form-control" onkeyup="zakat_show(this)" name="qty-zakat" id="qtyZakat" value="1" placeholder="0">
        </div>

        <br>
        <p> Perlu Membayar Zakat? &nbsp;&nbsp; <span class="text-success" id="zakatCondition"> Ya </span></p>
      </div>

      <div class="col-12">
        @include('zakats.forms.payment-table')

        <input type="hidden" name="akad" value="zakat-profesi" id="zakatType">
        <input type="submit" id="bayarZakat" name="" value="Bayar Zakat" class="btn main-btn btn-success single-btn text-light full-width">
      </div>
    </div> 
  </div>
{{ Form::close() }}