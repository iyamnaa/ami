@extends('layouts.admin.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Campaign Reports</li>
    </ol>
    <div class="row" style="margin-bottom: 20px">
      <div class="col-3 offset-1" style="margin-left: 30px">
        <a href="{{ route('reportCategories.index') }}" style="width: 100%" >
          <div class="bg-success text-light user-role">
            <i class="fa fa-th-list"></i> &nbsp;
            Kategori Laporan
          </div>
        </a>
      </div>
    </div>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             CampaignReports
                             <a class="pull-right" href="{{ route('campaignReports.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                             @include('admin.campaign_reports.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

