@extends('layouts.app')

@push('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<style type="text/css">
  body{
    background-color: #eef;
  }
</style>
@endpush

@section('content')
<div class="form-background bg-success"></div>

<section class="single-form mid-content report-campaign">
  <div class="container">
    <div class="single-form-box" style="margin-top:64px">
      <div class="content-box full-content bg-light">
        <div class="form-header">
          <!-- <h4 class="content-title">Campaign Baru</h4> -->
          <h4 class="content-title">Laporkan Campaign</h4>
        </div>
        <div class="form-body">
          <div class="content-box">
            <div class="form-group">
              <form>

                <div class="row">
                  <div class="col-12 col-md-12">
                    <label for="campaginCategory">Kategori Laporan</label>
                      <select class="form-control" id="campaginCategory" style="margin-bottom: 20px;">
                        <!-- @foreach($categories as $category)
                          <option value="{{ $category->id }}"> $category->name </option>
                        @endforeach -->
                      </select>
                    <label for="campaignName">Laporan : </label>
                    <textarea class="form form-control form-text ckeditor" name="campaign-name" id="campaignName" style="margin-bottom: 20px;" rows="5"> </textarea>
                  </div>
                </div>
                <div class="row" style="margin-top: 40px">
                  <div class="col-12 col">
                    <input class="btn btn-success main-btn mobile-full-width" type="submit" name="" value="Kirim Laporan" style="width: 100%">
                  </div>
                </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('script')
<script src="{{ asset('js/donation.js') }}"></script>
@endpush