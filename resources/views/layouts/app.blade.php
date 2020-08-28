<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Amal Madani Indonesia') }}</title>
    <link rel="icon" href="{{ asset('images/madani-logo.png') }}">
    <meta name="theme-color" content="forestgreen" />

    <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome/font-awesome.css') }}">

  @yield('stylesheet')
</head>
<body>
    <div id="app">
        @include('layouts.modal')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        var registration_form = [
          `@include('layouts.modal.registration.login')`,
          `@include('layouts.modal.registration.signup')`
        ]
        function call_registration_form(registration_type){
            $('#modal-include').html(registration_form[registration_type])
        }
    </script>
    @yield('javascript')
</body>
</html>