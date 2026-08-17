<!--app header-->
<div class="app-header header">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="{{ url('/painel') }}">
                <img src="{{ asset('images/logomarca.png') }}" class="header-brand-img desktop-lgo" alt="Varandas" style="max-height: 32px;">
                <img src="{{ asset('images/logo-quarada.jpg') }}" class="header-brand-img mobile-logo" alt="Varandas" style="max-height: 32px;">
            </a>
            <div class="app-sidebar__toggle" data-toggle="sidebar">
                <a class="open-toggle" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left header-icon mt-1"><line x1="17" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="17" y1="18" x2="3" y2="18"></line></svg>
                </a>
            </div>
            <div class="d-flex order-lg-2 ml-auto">
                <livewire:shared.notificacoes-sino />
                <div class="dropdown profile-dropdown">
                    <a href="#" class="nav-link pr-0 leading-none d-flex align-items-center" data-toggle="dropdown">
                        <span class="mr-2 d-none d-md-inline">{{ auth()->user()->nome }}</span>
                        <span class="avatar avatar-md brround bg-primary text-white d-inline-flex align-items-center justify-content-center">
                            {{ strtoupper(substr(auth()->user()->nome, 0, 1)) }}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                        <div class="text-center">
                            <span class="dropdown-item text-center user pb-0 font-weight-bold">{{ auth()->user()->nome }}</span>
                            <span class="text-center user-semi-title">{{ auth()->user()->perfil->nome->label() }}</span>
                            <div class="dropdown-divider"></div>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex">
                                <svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></svg>
                                <div>Sair</div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/app header-->
