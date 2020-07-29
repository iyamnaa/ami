<div align="center" style="width: 100%;margin: 20px 0">
  <h4 class="content-title">Zakat Emas</h4>
</div>
<br>
<form>
  <div class="form-group">
    <div class="row">
      <div class="col-12 col-md-4">
        <label>Jumlah Emas (Gram) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem"><i class="fa fa-database"></i></div>
          </div>
        <input type="number" class="form-control" onkeyup="gold_calculation()" value="1" name="jumlah-emas" placeholder="0">
        </div>

        <label>Harga Emas (Gram) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control" onkeyup="gold_calculation()" value="560835" name="harga-emas" placeholder="0">
        </div>

        <label>Nishab (Harga Emas x 86) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control" name="nishab-zakat" placeholder="0" disabled="true">
        </div>

<!--         <label>Zakat ((Jumlah x Harga Emas) x 2.5%) : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem">Rp</div>
          </div>
        <input type="text" class="form-control" name="kadar-zakat" placeholder="0" disabled="true">
        </div> -->

        <label>Jumlah Tahun : </label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        <input type="text" class="form-control" onkeyup="zakat_show(this)" name="qty-zakat" placeholder="0" value="1">
        </div>

        <br>
        <p> Perlu Membayar Zakat? &nbsp;&nbsp; <span class="text-success" id="zakatCondition"> Ya </p>
      </div>
      <div class="col-12 col-md-6 offset-md-2">
        @include('zakats.forms.payment-table')

        <input type="hidden" name="zakat-type" value="zakat-emas" id="zakatType">
        <input type="submit" name="" value="Bayar Zakat" class="btn main-btn btn-success single-btn text-light mobile-full-width">
      </div>
    </div> 
  </div>
</form>