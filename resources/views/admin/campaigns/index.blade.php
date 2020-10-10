@extends('layouts.admin.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Campaigns</li>
    </ol>
    <div class="row ml-4 mr-4 mb-3" align="center">
        <a href="{{ route('campaignCategories.index') }}" class="col-12 col-md-3 bg-success pb-3 pt-4 mb-3 text-center" style="border-radius:10px">
            <h5> Kategori Campaign </h5>
        </a>
        <a href="{{ route('topCampaigns.index') }}" class="col-12 col-md-3 offset-md-1 bg-primary pb-3 pt-4 mb-3 text-center" style="border-radius:10px">
            <h5> Top Campaign </h5>
        </a>
        <a href="{{ route('campaignReports.index') }}" class="col-12 col-md-3 offset-md-1 bg-danger pb-3 pt-4 mb-3 text-center" style="border-radius:10px">
            <h5> Laporan Campaign </h5>
        </a>
    </div>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Campaigns
                             <a class="pull-right" href="{{ route('campaigns.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                             @include('admin.campaigns.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

