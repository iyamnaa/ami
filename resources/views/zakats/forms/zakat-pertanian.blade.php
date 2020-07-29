<div align="center" style="width: 100%;margin: 20px 0">
  <h4 class="content-title">Zakat Penghasilan</h4>
</div>
<div class="content-box no-padd">
  <ul class="menu-list mobile-menu-list text-primary">
    <li style="border-bottom: 1px solid royalblue;">Kalkulator &nbsp;&nbsp;&nbsp;</li>
    <li>Hitung mandiri</li>
  </ul>
</div>
<br><br>
<form>
  <div class="form-group">
    <div class="row">
      <div class="col-12 col-md-4">
        <label>Jumlah Hasil Panen (Kg) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Kg</div>
          </div>
        <input type="number" class="form-control" onkeyup="agricultural_calculation()" name="jumlah-panen" value="1000" placeholder="0">
        </div>

        <label>Harga Panen (Per Kg) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control" onkeyup="agricultural_calculation()" value="14000" name="harga-panen" placeholder="0">
        </div>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="irigasi" id="defaultUnchecked" onclick="agricultural_calculation()">
            <label class="custom-control-label" for="defaultUnchecked">Dengan Irigasi</label>
        </div>

        <label>Nishab (Harga Beras x 524) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control" name="nishab-zakat" placeholder="0" disabled="true">
        </div>

        <label>Zakat (Kg) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Kg</div>
          </div>
        <input type="text" class="form-control" name="kadar-zakat-kg" placeholder="0" disabled="true">
        </div>

        <label>Zakat (Rp) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control" name="kadar-zakat" placeholder="0" value="0">
        </div>

        <br>
        <p> Perlu Membayar Zakat? &nbsp;&nbsp; <span class="text-success" id="zakatCondition"> Ya </p>
      </div>
      <div class="col-12 col-md-6 offset-md-2">
        @include('zakats.forms.payment-table')

        <input type="hidden" name="zakat-type" value="zakat-pertanian" id="zakatType">
        <input type="submit" name="" value="Bayar Zakat" class="btn main-btn btn-success single-btn text-light mobile-full-width">
      </div>
    </div> 
  </div>
</form>