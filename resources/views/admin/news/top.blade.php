@extends('layouts.admin.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Top Artikel Berita</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Top Artikel Berita
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
                                @foreach($articles as $article)
                                    <tr>
                                    <td><img src="{{ asset('images/'.$article->topNews->image_cover) }}" width="60px" height="60px"></td>
                                    <td>{{ $article->topNews->title }}</td>
                                    <td>{{ $article->topNews->created_at }}</td>
                                        <td>
                                            {!! Form::open(['route' => ['article.destroy', $article->id], 'method' => 'delete']) !!}
                                            <div class='btn-group'>
                                                <a href="{{ route('article.show', [$article->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('article.edit', [$article->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
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

