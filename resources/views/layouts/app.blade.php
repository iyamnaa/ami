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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/element.css') }}">

  @yield('stylesheet')
</head>
<body>
    <div class="full-width mid-content">
    @include('layouts.navbar')
        <div id="app">
            @include('layouts.bottom-navbar')
            @if(Auth::check())
                <div class="mobile-only-block">
                    <div class="hidden-background" style="display: none">
                        @include('layouts.user-sidebar')
                    </div>
                </div>
            @endif
            @include('layouts.modal')
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        $(window).ready(function(){
            user_sidebar(false)
        })
        function call_registration_form(registration_type){
            $('#modal-include').html(`@include('layouts.modal.registration.login')`)
        }
        function user_sidebar(hidden){
            $("#user-sidebar").animate({
                width: "toggle"
            })
            hidden ? $(".hidden-background").fadeIn(1000) :  $(".hidden-background").fadeOut(1000)
        }
    </script>
    @yield('javascript')
</body>
</html>