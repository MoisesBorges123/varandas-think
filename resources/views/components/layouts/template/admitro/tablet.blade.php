<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Varandas Bar') }} - Cozinha</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:600,700,800&display=swap" rel="stylesheet" />

    <!-- Template Admitro CSS -->
    <link rel="stylesheet" href="{{ asset('template/admitro/assets/css/style.css') }}">

    <!-- Tablet Specific CSS -->
    <style>
        * {
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            user-select: none;
        }
        
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-size: 18px;
            background: #f5f5f5;
        }

        .tablet-container {
            padding: 20px;
            max-width: 100%;
        }

        .texto-grande {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .btn-grande {
            font-size: 1.5rem;
            padding: 20px 40px;
            min-height: 70px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-grande:active {
            transform: scale(0.95);
        }
    </style>

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Custom Styles -->
    @stack('styles')
</head>
<body>

    <!-- Tablet Content (Fullscreen) -->
    <div class="tablet-container">
        {{ $slot }}
    </div>

    <!-- Template Admitro JS (minimal) -->
    <script src="{{ asset('template/admitro/assets/bundles/libscripts.bundle.js') }}"></script>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Notification Sound -->
    <audio id="notification-sound" preload="auto">
        <source src="{{ asset('sounds/notification.mp3') }}" type="audio/mpeg">
        <source src="{{ asset('sounds/notification.ogg') }}" type="audio/ogg">
    </audio>

    <!-- Custom Scripts -->
    @stack('scripts')

    <script>
        // Helper para tocar som de notificação
        window.playNotification = function() {
            const audio = document.getElementById('notification-sound');
            if (audio) {
                audio.play().catch(e => console.log('Erro ao tocar som:', e));
            }
        };

        // Livewire listener para novos pedidos
        Livewire.on('novoPedido', () => {
            window.playNotification();
        });
    </script>

</body>
</html>
