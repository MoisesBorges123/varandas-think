<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ForgotPassword extends Component
{
    #[Validate('required|email')]
    public string $email = '';

    public bool $enviado = false;

    public function enviar(): void
    {
        $this->validate();

        $status = Password::broker(config('fortify.passwords'))->sendResetLink(
            ['email' => $this->email],
        );

        if ($status === Password::RESET_LINK_SENT) {
            $this->enviado = true;

            return;
        }

        $this->dispatch('toastr', message: 'Não foi possível enviar o link de redefinição.', type: 'error', title: 'Ops');
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
