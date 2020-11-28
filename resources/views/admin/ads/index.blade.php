@extends('layouts.admin.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Advertising Image</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Advertising Image
                             <a class="pull-right" href="{{ route('ads.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                           <div class="table-responsive-sm">
                            <table class="table table-striped" id="news-table">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Urutan</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($ads as $ad)
                                    <tr>
                                    <td align="center" class="pb-3 pt-3"><img src="{{ asset($ad->image_url) }}"></td>
                                    <td>{{ $ad->urutan }}</td>
                                        <td>
                                            {!! Form::open(['route' => ['ads.destroy', $ad->id], 'method' => 'delete']) !!}
                                            <div class='btn-group'>
                                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                           </div>
                          <div class="pull-right mr-3">
                                  
                          </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

