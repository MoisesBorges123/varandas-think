<x-layouts.app>
    <div class="section-body">
        <h1 class="h3 mb-3">Painel</h1>
        <p>Bem-vindo, {{ auth()->user()->nome }} ({{ auth()->user()->perfil->nome->label() }}).</p>
        <p class="text-muted">Este é um painel provisório — as telas reais do sistema (comandas, pedidos, estoque etc.) ainda serão implementadas.</p>
    </div>
</x-layouts.app>
