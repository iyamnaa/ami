@extends('layouts.admin.app')

@section('content')
    <div class="row mt-4 ml-2 mr-2">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-primary">
            <div class="card-body pb-0">
                <div class="btn-group float-right">
                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                    </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                </div>
                <div class="text-value-lg"> {{ $total['zakat'] }} </div>
                <div class="mb-3">Donasi yang Disalurkan</div>
            </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-info">
            <div class="card-body pb-0">
                <button class="btn btn-transparent p-0 float-right" type="button">
                <svg class="c-icon">
                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-location-pin"></use>
                </svg>
                </button>
                <div class="text-value-lg"> Rp.{{ $total['dana_zakat'] }} </div>
                <div class="mb-3">Dana Donasi Terkumpul</div>
            </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-warning">
            <div class="card-body pb-0">
                <div class="btn-group float-right">
                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                    </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                </div>
                <div class="text-value-lg"> Rp.{{ $total['dana_amil'] }} </div>
                <div class="mb-3">Dana Amil yang Tersedia</div>
            </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-danger">
            <div class="card-body pb-0">
                <div class="btn-group float-right">
                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                    <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                    </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                </div>
                <div class="text-value-lg"> Rp.{{ $total['administration_fee'] }} </div>
                <div class="mb-3">Dana Admisistrasi yang Terpakai</div>
            </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.row-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Donations</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Donations
                             <a class="pull-right" href="{{ route('donations.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                             @include('admin.donations.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

