<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Varandas Bar') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Template Admitro CSS -->
    <link rel="stylesheet" href="{{ asset('template/admitro/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('template/admitro/assets/bundles/vendorscripts.bundle.css') }}">

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Custom Styles -->
    @stack('styles')
</head>
<body class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ asset('images/logo.png') }}" width="48" height="48" alt="Varandas"></div>
            <p>Carregando...</p>
        </div>
    </div>

    <!-- Guest Content (Login, Register, etc.) -->
    <div class="authentication">
        {{ $slot }}
    </div>

    <!-- Template Admitro JS -->
    <script src="{{ asset('template/admitro/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('template/admitro/assets/bundles/vendorscripts.bundle.js') }}"></script>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Custom Scripts -->
    @stack('scripts')

</body>
</html>
