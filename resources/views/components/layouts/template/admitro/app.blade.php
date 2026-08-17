<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Varandas Bar') }} - {{ $title ?? 'Painel' }}</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('template/admitro/assets/images/brand/favicon.ico') }}" type="image/x-icon">

    <!--Bootstrap css -->
    <link href="{{ asset('template/admitro/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('template/admitro/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('template/admitro/assets/css/dark.css') }}" rel="stylesheet">
    <link href="{{ asset('template/admitro/assets/css/skin-modes.css') }}" rel="stylesheet">
    <link href="{{ asset('template/admitro/assets/css/animated.css') }}" rel="stylesheet">
    <link href="{{ asset('template/admitro/assets/css/sidemenu.css') }}" rel="stylesheet">
    <link href="{{ asset('template/admitro/assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('template/admitro/assets/css/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/admitro/assets/plugins/simplebar/css/simplebar.css') }}">
    <link id="theme" href="{{ asset('template/admitro/assets/colors/color1.css') }}" rel="stylesheet" type="text/css">

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Custom Styles -->
    @stack('styles')
</head>
<body class="app sidebar-mini dark-mode">

    <!-- Global Loader -->
    <div id="global-loader">
        <img src="{{ asset('template/admitro/assets/images/svgs/loader.svg') }}" alt="loader">
    </div>

    <!-- Page -->
    <div class="page">
        <div class="page-main">

            @include('components.layouts.template.admitro.partials.sidebar')

            <div class="app-content main-content">
                <div class="side-app">

                    @include('components.layouts.template.admitro.partials.navbar')

                    @if(isset($header))
                        <div class="block-header">
                            {{ $header }}
                        </div>
                    @endif

                    {{ $slot }}

                </div>
            </div>

        </div>
    </div>

    <!-- Jquery js-->
    <script src="{{ asset('template/admitro/assets/js/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap4 js-->
    <script src="{{ asset('template/admitro/assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('template/admitro/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--Sidemenu js-->
    <script src="{{ asset('template/admitro/assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- P-scroll js-->
    <script src="{{ asset('template/admitro/assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
    <script src="{{ asset('template/admitro/assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
    <script src="{{ asset('template/admitro/assets/plugins/p-scrollbar/p-scroll.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('template/admitro/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>

    <!-- Custom js-->
    <script src="{{ asset('template/admitro/assets/js/custom.js') }}"></script>

    <!-- App JS/CSS (SweetAlert2, toastr, bridge com Livewire) - depois do jQuery do Admitro -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Custom Scripts -->
    @stack('scripts')

</body>
</html>
