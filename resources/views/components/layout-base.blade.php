{{--
    Component Base de Layout - Sistema de Templates Desacoplado

    Este component permite trocar o template visual apenas alterando
    a variável APP_TEMPLATE no arquivo .env

    Configuração: config/view.php
    'template' => env('APP_TEMPLATE', 'admitro')

    O parâmetro $layout escolhe qual variante do template usar
    (app/guest/tablet) - cada template deve fornecer essas três.
--}}
@props(['layout' => 'app'])
<x-dynamic-component :component="'layouts.template.' . config('view.template') . '.' . $layout">
    {{ $slot }}
</x-dynamic-component>
