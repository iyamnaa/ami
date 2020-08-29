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

      <div class="filter-content mb-3">
        <label>Kategori :</label>
        <select class="form-control" name="category" id="form-filter-category">
          @foreach($categories as $category)
            <option value="{{ $category->id }}"> {{ $category->name }} </option>
          @endforeach
        </select> 
      </div>

      <div class="filter-content mb-3">
        <label>Jenis Campaign :</label>
        <select class="form-control" name="campaign-type" id="form-campaign-deadline">
          <option> Semua </option>
          <option> Sedang Berjalan </option>
          <option> Telah Berakhir </option>
        </select> 
      </div>

      <div class="filter-content mb-3">
        <label>Urutkan :</label>
        <select class="form-control" name="sort-by" id="form-sort-by">
          <option> Trending </option>
          <option> Terbaru </option>
          <option value="Jumlah Donasi DESC"> Jumlah Donasi (Terbesar) </option>
          <option value="Jumlah Donasi ASC"> Jumlah Donasi (Terkecil) </option>
          <option> Sisa Waktu </option>
        </select> 
      </div>

    </div>

    <div class="modal-footer">
      <div class="row" style="width: 100%;">
        <div class="col-10">
            <input type="submit" class="btn form main-btn single-btn btn-orange text-light" style="width: 100%;margin: 20px 0" onclick="search_campaign()" value="Cari Campaign">
        </div>
      </div>
    </div>

  </div>
</form>