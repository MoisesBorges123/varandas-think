<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{ url('/painel') }}">
            <img src="{{ asset('images/logomarca.png') }}" class="header-brand-img" alt="Varandas" style="max-height: 40px;">
        </a>
    </div>
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <span class="avatar avatar-xl brround bg-primary text-white d-inline-flex align-items-center justify-content-center mb-1">
                    {{ strtoupper(substr(auth()->user()->nome, 0, 1)) }}
                </span>
            </div>
            <div class="user-info">
                <h5 class="mb-1">{{ auth()->user()->nome }}</h5>
                <span class="text-muted app-sidebar__user-name text-sm">{{ auth()->user()->perfil->nome->label() }}</span>
            </div>
        </div>
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category mt-4">Principal</li>
        <li class="slide">
            <a class="side-menu__item {{ request()->is('painel') ? 'active' : '' }}" href="{{ url('/painel') }}">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
                <span class="side-menu__label">Painel</span>
            </a>
        </li>
        <li class="slide {{ request()->is('cardapio/*') ? 'is-expanded' : '' }}">
            <a class="side-menu__item {{ request()->is('cardapio/*') ? 'active' : '' }}" data-toggle="slide" href="#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 9h2V6h3V4h-3V1h-2v3H8v2h3v3zm-4 9c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-9.83-3.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4l-3.86 7H8.53L4.27 2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h.07z"/></svg>
                <span class="side-menu__label">Cardápio</span><i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">
                <li><a href="{{ route('cardapio.categorias.index') }}" class="slide-item {{ request()->routeIs('cardapio.categorias.*') ? 'active' : '' }}">Categorias</a></li>
                <li><a href="{{ route('cardapio.produtos.index') }}" class="slide-item {{ request()->routeIs('cardapio.produtos.*') ? 'active' : '' }}">Produtos</a></li>
            </ul>
        </li>
    </ul>
</aside>
