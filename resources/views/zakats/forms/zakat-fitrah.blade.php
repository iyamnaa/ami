<div align="center" style="width: 100%;margin: 20px 0">
  <h4 class="content-title">Zakat Fitrah</h4>
</div>
<br>
<form>
  <div class="form-group">
    <div class="row">
      <div class="col-12 col-md-4">
        <label>Harga Beras (Kg) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="number" class="form-control harga-beras" name="harga-beras" value="14000" autocomplete="off">
        </div>

        <label>Zakat (Harga Beras x 2.5 Kg) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="number" class="form-control zakat-beras" name="zakat-beras" value="0" disabled="true">
        </div>

        <label>Jumlah Anggota Keluarga : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        <input type="number" class="form-control anggota-keluarga" name="" value="1">
        </div>
      </div>
      <div class="col-12 col-md-6 offset-md-2">
        <div class="payment-cek">
          <table class="table">
            <tr align="center">
              <th colspan="2">Total Zakat</th>
            </tr>
            <tr>
              <th width="40%">Keterangan</th>
              <th width="60%">Nominal</th>
            </tr>
            <tr>
              <td>Zakat Beras</td>
              <td><p class="tb-list-1">Rp. 0.00</p></td>
            </tr>
            <tr>
              <td>Anggota Keluarga</td>
              <td><p class="tb-list-2">0</p></td>
            </tr>
            <tr class="bg-success text-light">
              <td align="center">Total</td>
              <td><p class="tb-total">Rp. 0.00</p></td>
            </tr>
          </table>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Bismillah.
          </label>
        </div><br>
        <input type="submit" name="" value="Bayar Zakat" class="btn main-btn btn-success single-btn text-light mobile-full-width">
      </div>
    </div> 
  </div>
</form>