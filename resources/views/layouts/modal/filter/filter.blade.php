<div class="modal-header">
  <h5 class="modal-title" id="pop-up-title">Filter Campaign</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<form style="margin: 0 2vh">
  <div class="form-group">
    <div class="modal-body">
      <div class="search-on-mobile">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-search"></i></span>
            </div>
              <input type="text" id="searchFilter" name="search-filter" class="form-control" placeholder="Cari Campaign">
            </div>
      </div>

      <div class="filter-content">
        <label>Kategori :</label>
        <select class="form-control">
          <option> Bencana Alam </option>
          <option> Karya Seni </option>
          <option> Keagamaan </option>
          <option> Kemanusiaan </option>
          <option> Kesehatan </option>
          <option> Lingkungan </option>
          <option> Panti </option>
          <option> Pendidikan </option>
          <option> Produk & Inovasi </option>
          <option> Lainnya </option>
        </select> 
      </div>

      <div class="filter-content">
        <label>Jenis Campaign :</label>
        <select class="form-control">
          <option> Sedang Berjalan </option>
          <option> Telah Berakhir </option>
        </select> 
      </div>

      <div class="filter-content">
        <label>Urutkan :</label>
        <select class="form-control">
          <option> Trending </option>
          <option> Terbaru </option>
          <option> Jumlah Donasi </option>
          <option> Sisa Waktu </option>
        </select> 
      </div>

    </div>

    <div class="modal-footer">
      <div class="row" style="width: 100%;">
        <div class="col-10">
            <div class="btn form main-btn single-btn btn-orange text-light" style="width: 100%;margin: 20px 0">
              Cari Campaign
            </div>
        </div>
      </div>
    </div>

  </div>
</form>