<div class="page">
    <div class="page-single">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center title-style mb-6">
                                <img src="{{ asset('images/logomarca.png') }}" alt="Varandas" style="max-width: 220px;" class="mb-3">
                                <hr>
                                <p class="text-muted">Entre com seu usuário</p>
                            </div>

                            <form wire:submit="login">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fe fe-user"></i>
                                        </div>
                                    </div>
                                    <input type="email" wire:model="email" class="form-control" placeholder="E-mail" autofocus>
                                </div>
                                @error('email')
                                    <div class="text-danger small mb-3">{{ $message }}</div>
                                @enderror

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fe fe-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" wire:model="password" class="form-control" placeholder="Senha">
                                </div>
                                @error('password')
                                    <div class="text-danger small mb-3">{{ $message }}</div>
                                @enderror

                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" wire:model="remember" class="custom-control-input">
                                        <span class="custom-control-label">Lembrar-me</span>
                                    </label>
                                    <a href="{{ route('password.request') }}" wire:navigate class="btn-link">Esqueci minha senha</a>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block px-4" wire:loading.attr="disabled" wire:target="login">
                                            <span wire:loading.remove wire:target="login">Entrar</span>
                                            <span wire:loading wire:target="login">Entrando...</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
