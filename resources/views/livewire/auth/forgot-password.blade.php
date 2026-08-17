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
                                <p class="text-muted">Esqueci minha senha</p>
                            </div>

                            @if ($enviado)
                                <div class="alert alert-success">
                                    Se o e-mail informado existir em nosso cadastro, enviamos um link para redefinir a senha.
                                </div>
                                <a href="{{ route('login') }}" wire:navigate class="btn-link">Voltar para o login</a>
                            @else
                                <p class="text-muted mb-4">Informe seu e-mail e enviaremos um link para redefinir sua senha.</p>

                                <form wire:submit="enviar">
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

                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block px-4" wire:loading.attr="disabled" wire:target="enviar">
                                                <span wire:loading.remove wire:target="enviar">Enviar link</span>
                                                <span wire:loading wire:target="enviar">Enviando...</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <a href="{{ route('login') }}" wire:navigate class="btn-link">Voltar para o login</a>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
