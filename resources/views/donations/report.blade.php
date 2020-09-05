@extends('layouts.app')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<style type="text/css">
  body{
    background-color: #eef;
  }
</style>
@endsection

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
              {!! Form::open(['route' => 'report.save']) !!}

                <div class="row">
                  <div class="col-12 col-md-12">
                    <label for="campaginCategory">Kategori Laporan</label>
                      <select name="report_category_id" class="form-control" id="campaginCategory" style="margin-bottom: 20px;">
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}"> {{ $category->name }} </option>
                        @endforeach
                      </select>
                    <label for="campaignName">Laporan : </label>
                    <textarea class="form form-control form-text ckeditor" name="body" id="body" style="margin-bottom: 20px;" rows="5"> </textarea>
                  </div>
                </div>
                <div class="row" style="margin-top: 40px">
                  <div class="col-12 col">
                    <input type="hidden" name="campaign_id" value="{{ $campaign_id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input class="btn btn-success main-btn mobile-full-width" type="submit" name="" value="Kirim Laporan" style="width: 100%">
                  </div>
                </div>

              {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('javascript')
<script src="{{ asset('js/donation.js') }}"></script>
@endsection