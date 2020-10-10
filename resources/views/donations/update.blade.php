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
          <h4 class="content-title">Pemberitahuan Campaign</h4>
        </div>
        <div class="form-body">
          <div class="content-box">
            <div class="form-group">
              {!! Form::open(['route' => 'campaign.updates.save']) !!}
                <div class="row">
                  <div class="col-12 col-md-12">
                    <label for="updateTitle"> Judul Update : </label>
                    <input type="text" name="title" class="form-control mb-3" placeholder="Judul Update" id="updateTitle">
                    <label for="numberOfRecipients"> Penerima Manfaaat : </label>
                    <input type="number" name="number_of_recipients" class="form-control mb-3" placeholder="Penerima Manfaat" id="numberOfRecipients">
                    <label for="updateBody"> Pembaharuan : </label>
                    <textarea class="form form-control form-text ckeditor" name="body" id="updateBody" style="margin-bottom: 20px;" rows="5"> </textarea>
                  </div>
                </div>
                <div class="row" style="margin-top: 40px">
                  <div class="col-12 col">
                    <input type="hidden" value="{{ $campaign_id }}" name="campaign_id">
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
</section>
@endsection

@push('script')
    <script src="//cdn.ckeditor.com/4.14.1/basic/ckeditor.js"></script>
<script src="{{ asset('js/donation.js') }}"></script>
@endpush