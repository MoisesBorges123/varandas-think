{{-- 
    Component Base de Layout - Sistema de Templates Desacoplado
    
    Este component permite trocar o template visual apenas alterando 
    a variável APP_TEMPLATE no arquivo .env
    
    Configuração: config/view.php
    'template' => env('APP_TEMPLATE', 'admitro')
--}}
<x-dynamic-component :component="'layouts.template.' . config('view.template')">
    {{ $slot }}
</x-dynamic-component>
