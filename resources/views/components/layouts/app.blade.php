<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- theme meta -->
        <meta name="theme-name" content="revolve" />

        <!--Favicon-->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

        <!-- THEME CSS
        ================================================== -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
        <!-- Themify -->
        <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick.css') }}">
        <!-- Slick Carousel -->
        <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}">
        <!-- manin stylesheet -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <title>{{ config('app.name') }}</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @filamentStyles
        @vite('resources/css/app.css')
    </head>

    <body class="antialiased">
        @livewire('components.menu')

        {{ $slot }}

        @livewire('components.footer')


        @filamentScripts
        @vite('resources/js/app.js')

        <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
        <!-- Bootstrap jQuery -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
        <!-- Owl caeousel -->
        <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('plugins/slick-carousel/slick.min.js') }}"></script>
        <script src="{{ asset('plugins/magnific-popup/magnific-popup.js') }}"></script>
        <!-- Instagram Feed Js -->
        <script src="{{ asset('plugins/instafeed-js/instafeed.min.js') }}"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
        <script src="{{ asset('plugins/google-map/gmap.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
</html>
