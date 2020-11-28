<div class="modal-header">
  <h5 class="modal-title" id="pop-up-title">Filter Campaign</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<form style="margin: 0 2vh">
  <div class="form-group">
    <div class="modal-body">
      <div class="mb-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-search"></i></span>
            </div>
              <input type="text" id="searchFilter" name="search-filter" class="form-control" placeholder="Cari Campaign">
            </div>
      </div>

      <div>
          <label> Tanggal Rilis Berita </label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-search"></i></span>
            </div>
              <input type="date" id="searchFilter" name="created_at" class="form-control" placeholder="">
            </div>
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