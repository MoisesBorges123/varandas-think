<?php

namespace App\Livewire\Shared;

use App\Services\NotificacaoService;
use Livewire\Component;

class NotificacoesSino extends Component
{
    public function render(NotificacaoService $service)
    {
        return view('livewire.shared.notificacoes-sino', [
            'notificacoes' => $service->pendentesParaUsuarioAutenticado(),
        ]);
    }
}
