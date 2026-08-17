<?php

namespace App\Livewire\Auth;

use App\Actions\Fortify\ResetUserPassword as ResetUserPasswordAction;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password as PasswordRule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ResetPassword extends Component
{
    public string $token = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|string|confirmed')]
    public string $password = '';

    public string $password_confirmation = '';

    public function mount(string $token, string $email = ''): void
    {
        $this->token = $token;
        $this->email = $email;
    }

    public function redefinir(): void
    {
        $this->validate([
            'email' => 'required|email',
            'password' => ['required', 'string', 'confirmed', PasswordRule::default()],
        ]);

        $status = Password::broker(config('fortify.passwords'))->reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token,
            ],
            function ($user) {
                app(ResetUserPasswordAction::class)->reset($user, ['password' => $this->password]);
            },
        );

        if ($status !== Password::PASSWORD_RESET) {
            $this->dispatch('toastr', message: 'Não foi possível redefinir a senha. O link pode ter expirado.', type: 'error', title: 'Ops');

            return;
        }

        $this->dispatch('toastr', message: 'Senha redefinida com sucesso. Faça login.', type: 'success', title: 'Pronto');

        $this->redirect(route('login'), navigate: false);
    }

    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}
