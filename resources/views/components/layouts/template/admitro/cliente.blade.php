<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Varandas Bar') }}</title>

    <link rel="icon" href="{{ asset('template/admitro/assets/images/brand/favicon.ico') }}">

    {{-- CSS do Admitro (Bootstrap 4 + tema) — mesmo arquivo usado por
    app.blade.php/guest.blade.php. Sem o bundle pesado de jQuery/plugins,
    que essa tela não usa. --}}
    <link rel="stylesheet" href="{{ asset('template/admitro/assets/css/style.css') }}">

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* A logomarca é branca (pensada pro fundo escuro do sidebar do
        painel) — sem isso, fica invisível sobre o card claro desta tela. */
        .logo-cliente {
            filter: invert(1);
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh; background: #f5f5f5;">
    <div class="container" style="max-width: 480px;">
        <div class="text-center mb-4">
            <img src="{{ asset('images/logomarca.png') }}" alt="Varandas" class="logo-cliente" style="max-height: 60px;">
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>
