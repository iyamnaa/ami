@extends('layouts.admin.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Top Campaign</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Top Campaign
                             <a class="pull-right" href="{{ route('news.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                           <div class="table-responsive-sm">
                            <table class="table table-striped" id="news-table">
                                <thead>
                                    <tr>
                                <th>Gambar Cover</th>
                                <th>Title</th>
                                <th>Tanggal</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($campaigns as $campaign)
                                    <tr>
                                    <td><img src="{{ asset('images/'.$campaign->topCampaign->image_cover) }}" width="60px" height="60px"></td>
                                    <td>{{ $campaign->topCampaign->title }}</td>
                                    <td>{{ $campaign->topCampaign->created_at }}</td>
                                        <td>
                                            {!! Form::open(['route' => ['topCampaigns.destroy', $campaign->id], 'method' => 'delete']) !!}
                                            <div class='btn-group'>
                                                <a href="{{ route('campaigns.show', [$campaign->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
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

