@extends('layouts.app')

@section('stylesheet')
<base href="./">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<!-- Bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/css/coreui.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/coreui-icons-free@1.0.1-alpha.1/coreui-icons-free.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css"
        rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
@endsection

@section('content')
<div class="app flex-row align-items-center full-width">
    <div class="container-fluid no-padd" style="height: 100vh">
        <div class="full-width" style="height: 100%">
            <div class="col-12 mid-content bg-white">
                <div class="card-group">
                    <div class="card p-4" style="border:none">
                        <div class="card-body p-4">
                            <div class="mobile-only full-width d-inline-block mb-5" align="center">
                                <img src="{{ asset('images/madani-logo.png') }}" width="130px">
                            </div>
                            <form method="post" action="{{ url('/login') }}">
                                @csrf
                                <h1>Login</h1>
                                <p class="text-muted mb-4">Masuk ke dalam akun anda</p>
                                <div class="input-group mt-4 mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="icon-user"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" name="email" value="{{ old('email') }}"
                                        placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="icon-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" placeholder="Password" name="password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <a class="btn btn-link text-success px-0" href="{{ url('/password/reset') }}">
                                            Lupa Password?
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-success btn-main single-btn full-width p-2 mb-3" type="submit">Masuk</button>
                                        <a href="{{ url('/register') }}">
                                            <div class="btn btn-light text-dark btn-main single-btn full-width p-2 mb-4"> Daftar Akun </div>
                                        </a>

                                        <a href="{{ url('/register') }}">
                                            <div class="btn btn-danger btn-main single-btn full-width p-2 mb-4"> <i class="fa fa-google"></i> &nbsp; Masuk melalui Google  </div>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6 mobile-none no-padd" style="background-color:#000">
             <img src="{{ asset('images/zakat-fitrah.jpg') }}" class="full-image" style="height:100%;opacity:0.3"> </img>
            </div> -->
        </div>
    </div>
</div>
@endsection


@section('javascript')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.js"></script>
<script src="{{ asset('js/style.js') }}"></script>
<!-- <script src="{{ asset('js/registration.js') }}"></script> -->
@endsection