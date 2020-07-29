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
        <label>Penghasilan (Bulan) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="number" class="form-control" name="" placeholder="0">
        </div>

        <label>Penghasilan Tambahan (Bulan) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control" name="" placeholder="0">
        </div>

        <label>Pengeluaran Pokok (Bulan) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control" name="" placeholder="0">
        </div>

        <label>Harga Beras (Kg) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control" name="" placeholder="0">
        </div>

        <label>Nasab (Harga Beras x 552 Kg) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control" name="" placeholder="0" disabled="true">
        </div>

        <label>Jumlah Bulan : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        <input type="text" class="form-control" name="" placeholder="0">
        </div>
      </div>
      <div class="col-12 col-md-6 offset-md-2">
        @include('zakats.forms.payment-table')

        <input type="hidden" name="zakat-type" value="zakat-perdagangan">
        <input type="submit" name="" value="Bayar Zakat" class="btn main-btn btn-success single-btn text-light mobile-full-width">
      </div>
    </div> 
  </div>
</form>