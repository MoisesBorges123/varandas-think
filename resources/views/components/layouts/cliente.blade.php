{{--
    Layout Cliente (fluxo público via QR code — sem login)

    Utiliza o component layout-base com a variante "cliente" do template
    ativo (ver resources/views/components/layout-base.blade.php).
--}}
<x-layout-base layout="cliente">
    {{ $slot }}
</x-layout-base>
