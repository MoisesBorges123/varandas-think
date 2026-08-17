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
                                <p class="text-muted">Redefinir senha</p>
                            </div>

                            <form wire:submit="redefinir">
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
                                    <input type="password" wire:model="password" class="form-control" placeholder="Nova senha">
                                </div>
                                @error('password')
                                    <div class="text-danger small mb-3">{{ $message }}</div>
                                @enderror

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fe fe-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" wire:model="password_confirmation" class="form-control" placeholder="Confirme a nova senha">
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block px-4" wire:loading.attr="disabled" wire:target="redefinir">
                                            <span wire:loading.remove wire:target="redefinir">Redefinir senha</span>
                                            <span wire:loading wire:target="redefinir">Salvando...</span>
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
