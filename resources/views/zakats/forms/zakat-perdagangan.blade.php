<div align="center" style="width: 100%;margin: 20px 0">
  <h4 class="content-title">Zakat Perdagangan / Niaga</h4>
</div>
<br>
{{ Form::open(array('route' => 'zakats.payment','method' => 'get', 'onsubmit' =>'delete_params()')) }}
  <div class="form-group">
    <div class="row">
      <div class="col-12">
          <label> Modal Sisa : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" onkeyup="trade_calculation()" placeholder="0" name="modal-sisa" >
          </div>

          <label> Keuntungan : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" onkeyup="trade_calculation()" placeholder="0" name="dana-untung" >
          </div>

          <label> Piutang Ditarik : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" onkeyup="trade_calculation()" placeholder="0" name="jumlah-piutang" >
          </div>

          <label> Kerugian : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" onkeyup="trade_calculation()" placeholder="0" name="dana-rugi" >
          </div>

          <label> Hutang Jarak Pendek : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" onkeyup="trade_calculation()" placeholder="0" name="jumlah-hutang" >
          </div>
          
          <label>Nishab (Harga Emas x 85 Gram) : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control" name="nishab-zakat" placeholder="0" disabled="true">
          </div>

          <label>Zakat ((income - outcome) x 2.5%) : </label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="font-size: .94rem">Rp</div>
            </div>
          <input type="text" class="form-control currency" name="kadar-zakat" id="kadarZakat" value="0" readonly>
          </div>
          
          <br>
          <p> Perlu Membayar Zakat? &nbsp;&nbsp; <span class="text-success" id="zakatCondition"> Ya </span></p>
      </div>
      <div class="col-12">
      @include('zakats.forms.payment-table')

        <input type="hidden" name="akad" value="zakat-perdagangan" id="zakatType">
        <input type="submit" value="Bayar Zakat" class="btn main-btn btn-success single-btn text-light full-width">
      </div>

    </div> 
  </div>
{{ Form::close() }}