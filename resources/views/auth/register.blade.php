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

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/registration.css') }}">
@endsection

@section('content')
<div class="app flex-row align-items-center">
    <div class="container-fluid" style="height: 100vh">
        <div class="row justify-content-center" style="height: 100%">
            <div class="col-md-6 col-12 mid-content" style="background-color:white">
                <div class="card-group">
                    <div class="card p-4" style="border:none">
                        <div class="card-body p-4">
                            <div class="mobile-only full-width d-inline-block mb-5" align="center">
                                <img src="{{ asset('images/madani-logo.png') }}" width="130px">
                            </div>
                            <form method="post" action="{{ url('/register') }}">
                                @csrf
                                <h1>Daftar Akun</h1>
                                <p class="text-muted">Bergabung bersama kami</p>
                                <div class="user-profile">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        </div>
                                        <input type="text" class="form-control {{ $errors->has('name')?'is-invalid':'' }}" name="name" value="{{ old('name') }}"
                                            placeholder="Nama Lengkap">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-mars"></i>
                                        </span>
                                        </div>
                                        <select class="form-control custom-select" name="gender">
                                            <option> --Pilih Jenis Kelamin </option>
                                            <option value="Laki-laki"> Laki Laki </option>
                                            <option value="Perempuan"> Perempuan </option>    
                                        </select>
                                        @if ($errors->has('gender'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class=" fa fa-phone"></i></span>
                                        </div>
                                        <input type="tel" class="form-control {{ $errors->has('telephone')?'is-invalid':'' }}" name="telephone" value="{{ old('telephone') }}" placeholder="Number Telephone">
                                        @if ($errors->has('telephone'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('telephone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class=" fa fa-map-marker"></i></span>
                                        </div>
                                        <input type="text" class="form-control {{ $errors->has('address')?'is-invalid':'' }}" name="address" value="{{ old('address') }}" placeholder="Alamat Lengkap">
                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control {{ $errors->has('bio')?'is-invalid':'' }}" name="bio" value="{{ old('bio') }}" placeholder="Biodata">
                                        @if ($errors->has('bio'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('bio') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <button class="btn btn-success btn-main single-btn full-width p-2 mb-2" id="registrationStepBtn"> Daftar </button>
                                </div>
                                <div class="user-credentials" style="display:none">
                                    <div class="text-primary mb-3 back-btn">   
                                        <i class="fa fa-arrow-left"></i> &nbsp; Kembali
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                        </div>
                                        <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" name="email" value="{{ old('email') }}" placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                        </div>
                                        <input type="text" class="form-control {{ $errors->has('username')?'is-invalid':'' }}" name="username" value="{{ old('username') }}" placeholder="Username">
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-lock"></i>
                                        </span>
                                        </div>
                                        <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':''}}" name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-lock"></i>
                                        </span>
                                        </div>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            placeholder="Konfirmasi password">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <button class="btn btn-success btn-main single-btn full-width p-2 mb-2"> Daftar </button>
                                </div>
                            </form>
                            <a href="{{ url('/login') }}">
                                <div class="btn btn-light text-dark btn-main single-btn full-width p-2 mb-4"> Sudah Memiliki Akun </div>
                            </a>
                            <a href="{{ url('/register') }}">
                                <div class="btn btn-danger btn-main single-btn full-width p-2 mb-4"> <i class="fa fa-google"></i> &nbsp; Daftar melalui Google  </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mobile-none no-padd" style="background-color:#000">
             <img src="{{ asset('images/zakat-fitrah.jpg') }}" class="full-image" style="height:100%;opacity:0.3"> </img>
            </div>
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
<script type="text/javascript">
    $('#registrationStepBtn').click(function(){
        event.preventDefault();
        $(this).text('Selesai')
        $(this).attr('type', 'submit')
        $('.user-profile').hide()
        $('.user-credentials').show()
    })

    $('.back-btn').click(function(){
        $('.user-credentials').hide()
        $('.user-profile').show()
    })
</script>
<!-- <script src="{{ asset('js/registration.js') }}"></script> -->
@endsection