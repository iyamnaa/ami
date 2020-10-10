@extends('layouts.admin.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Artikel Berita</li>
    </ol>
    <div class="row breadcrumb ml-4 mr-4 mb-3">
        <a href="{{ route('topNews.index') }}" class="col-12 col-md-3 bg-danger pb-3 pt-4 text-center" style="border-radius:10px">
            <h5> Top Artikel </h5>
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
                             Artikel Berita
                             <a class="pull-right" href="{{ route('news.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                             @include('admin.news.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

