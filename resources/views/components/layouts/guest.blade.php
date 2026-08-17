{{--
    Layout Guest (login, esqueci senha, etc.)

    Utiliza o component layout-base com a variante "guest" do template
    ativo (ver resources/views/components/layout-base.blade.php).
--}}
<x-layout-base layout="guest">
    {{ $slot }}
</x-layout-base>
