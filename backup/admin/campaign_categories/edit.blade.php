@extends('layouts.admin.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('campaignCategories.index') !!}">Campaign Category</a>
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
                              <strong>Edit Campaign Category</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($campaignCategory, ['route' => ['campaignCategories.update', $campaignCategory->id], 'method' => 'patch']) !!}

                              @include('admin.campaign_categories.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection