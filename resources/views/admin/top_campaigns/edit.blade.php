@extends('layouts.admin.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('topCampaigns.index') !!}">Top Campaign</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Top Campaign</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($topCampaign, ['route' => ['topCampaigns.update', $topCampaign->id], 'method' => 'patch']) !!}

                              @include('admin.top_campaigns.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection