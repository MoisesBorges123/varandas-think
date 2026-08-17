<div class="dropdown header-notify">
    <a class="nav-link icon" data-toggle="dropdown">
        <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707C3.105 15.48 3 15.734 3 16v2c0 .553.447 1 1 1h16c.553 0 1-.447 1-1v-2c0-.266-.105-.52-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707C6.895 14.52 7 14.266 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zM12 22c1.311 0 2.407-.834 2.818-2H9.182C9.593 21.166 10.689 22 12 22z"/></svg>
        @if ($notificacoes->count() > 0)
            <span class="pulse"></span>
        @endif
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
        <div class="dropdown-header">
            <h6 class="mb-0">Notificações</h6>
            <span class="badge badge-pill badge-primary ml-auto">{{ $notificacoes->count() }}</span>
        </div>
        <div class="notify-menu">
            @forelse ($notificacoes as $notificacao)
                <div class="dropdown-item border-bottom d-flex pl-4">
                    <div class="notifyimg bg-warning-transparent text-warning"><i class="fe fe-alert-triangle"></i></div>
                    <div>
                        <div class="font-weight-normal1">{{ $notificacao->titulo }}</div>
                        <div class="small text-muted">{{ $notificacao->mensagem }}</div>
                    </div>
                </div>
            @empty
                <div class="dropdown-item text-center text-muted py-3">Nenhuma pendência.</div>
            @endforelse
        </div>
    </div>
</div>
