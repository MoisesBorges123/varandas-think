<?php

namespace App\Livewire\Auth;

use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    public function login(): void
    {
        $this->validate();

        $throttleKey = Str::lower($this->email) . '|' . request()->ip();

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $segundos = RateLimiter::availableIn($throttleKey);

            $this->dispatch('toastr', message: "Muitas tentativas. Tente novamente em {$segundos} segundos.", type: 'error', title: 'Aguarde');

            return;
        }

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($throttleKey, 60);

            $this->dispatch('toastr', message: 'E-mail ou senha inválidos.', type: 'error', title: 'Não foi possível entrar');

            return;
        }

        RateLimiter::clear($throttleKey);

        /** @var Usuario $usuario */
        $usuario = Auth::user();

        if (! $usuario->ativo) {
            Auth::logout();

            $this->dispatch('toastr', message: 'Este usuário está desativado. Fale com o administrador.', type: 'error', title: 'Acesso bloqueado');

            return;
        }

        session()->regenerate();

        $this->redirect(route('painel'), navigate: false);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
