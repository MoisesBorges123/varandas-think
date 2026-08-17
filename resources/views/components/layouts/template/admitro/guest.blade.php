<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Varandas Bar') }}</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('template/admitro/assets/images/brand/favicon.ico') }}" type="image/x-icon">

    <!--Bootstrap css -->
    <link href="{{ asset('template/admitro/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('template/admitro/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('template/admitro/assets/css/dark.css') }}" rel="stylesheet">
    <link href="{{ asset('template/admitro/assets/css/skin-modes.css') }}" rel="stylesheet">
    <link href="{{ asset('template/admitro/assets/css/animated.css') }}" rel="stylesheet">
    <link href="{{ asset('template/admitro/assets/css/icons.css') }}" rel="stylesheet">
    <link id="theme" href="{{ asset('template/admitro/assets/colors/color1.css') }}" rel="stylesheet" type="text/css">

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Custom Styles -->
    @stack('styles')
</head>
<body class="h-100vh bg-primary dark-mode">

    {{ $slot }}

    {{-- Persistido: evita reexecutar os scripts a cada wire:navigate entre
         login/esqueci-senha (mesmo motivo do layout app, ver comentário lá). --}}
    @persist('admitro-scripts-guest')
        <!-- Jquery js-->
        <script src="{{ asset('template/admitro/assets/js/jquery-3.5.1.min.js') }}"></script>

        <!-- Bootstrap4 js-->
        <script src="{{ asset('template/admitro/assets/plugins/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('template/admitro/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Custom js-->
        <script src="{{ asset('template/admitro/assets/js/custom.js') }}"></script>
    @endpersist

    <!-- App JS/CSS (SweetAlert2, toastr, bridge com Livewire) - depois do jQuery do Admitro -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Custom Scripts -->
    @stack('scripts')

</body>
</html>
