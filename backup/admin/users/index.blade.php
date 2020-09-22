@extends('layouts.admin.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="container-fluid">
      <div class="row" style="margin-bottom: 20px">
        <div class="col-4 col-md-2 offset-1" style="margin-left: 20px">
          <a href="{{ route('users.index', ['role' => 'member']) }}" style="width: 100%" >
            <div class="bg-success text-light user-role">
              <i class="fa fa-users"></i> &nbsp;
              Pengguna
            </div>
          </a>
        </div>
        <div class="col-4 col-md-2">
          <a href="{{ route('users.index', ['role' => 'relawan']) }}" style="width: 100%" >
            <div class="bg-danger text-light user-role">
              <i class="fa fa-users"></i> &nbsp;
              Relawan
            </div>
          </a>
        </div>
        <div class="col-3 col-md-2">
          <a href="{{ route('users.index', ['role' => 'admin']) }}" style="width: 100%" >
            <div class="bg-primary text-light user-role">
              <i class="fa fa-users"></i> &nbsp;
              Admin
            </div>
          </a>
        </div>
      </div>
      <div class="animated fadeIn">
           @include('flash::message')
           <div class="row">
             <div class="col-lg-12">
               <div class="card">
                 <div class="card-header">
                   <i class="fa fa-align-justify"></i>
                   User ({{ $role }})
                   <a class="pull-right" href="{{ route('users.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                 </div>
                 <div class="card-body">
                   @include('admin.users.table')
                    <div class="pull-right mr-3"></div>
                 </div>
               </div>
            </div>
         </div>
       </div>
    </div>
@endsection

