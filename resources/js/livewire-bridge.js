import Swal from 'sweetalert2';
import toastr from 'toastr';

toastr.options = {
    closeButton: true,
    progressBar: true,
    positionClass: 'toast-top-right',
    timeOut: 5000,
};

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 5000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
    },
});

document.addEventListener('livewire:init', () => {
    /**
     * Toast simples (canto da tela), estilo SweetAlert2.
     * PHP: $this->dispatch('toast', message: 'Salvo com sucesso!', type: 'success');
     */
    Livewire.on('toast', ({ message, type = 'success' }) => {
        Toast.fire({ icon: type, title: message });
    });

    /**
     * Notificação toastr clássica (usada quando o texto é mais longo ou
     * precisa de título separado).
     * PHP: $this->dispatch('toastr', message: '...', type: 'error', title: 'Opcional');
     */
    Livewire.on('toastr', ({ message, type = 'info', title = '' }) => {
        if (typeof toastr[type] === 'function') {
            toastr[type](message, title);
        } else {
            toastr.info(message, title);
        }
    });

    /**
     * Modal de confirmação/decisão do SweetAlert2, com o resultado
     * despachado de volta para o Livewire.
     *
     * PHP:
     *   $this->dispatch('swal', [
     *       'title' => 'Cancelar item?',
     *       'message' => 'Essa ação não pode ser desfeita.',
     *       'type' => 'question',
     *       'confirmEvent' => 'cancelar-item-confirmado',
     *       'confirmParams' => ['itemPedidoId' => $itemPedidoId],
     *       'showCancelButton' => true,
     *   ]);
     *
     * O componente Livewire escuta de volta com:
     *   #[On('cancelar-item-confirmado')]
     *   public function cancelarItemConfirmado($itemPedidoId) { ... }
     */
    Livewire.on('swal', (params) => {
        Swal.fire({
            title: params.title ?? '',
            html: params.message ?? '',
            icon: params.type ?? 'question',
            confirmButtonColor: params.confirmButtonColor ?? '#3085d6',
            cancelButtonColor: params.cancelButtonColor ?? '#aaa',
            confirmButtonText: params.confirmButtonText ?? 'Ok',
            cancelButtonText: params.cancelButtonText ?? 'Cancelar',
            showCancelButton: params.showCancelButton ?? false,
            showDenyButton: params.showDenyButton ?? false,
            denyButtonText: params.denyButtonText ?? 'Não',
        }).then((result) => {
            if (result.isConfirmed && params.confirmEvent) {
                Livewire.dispatch(params.confirmEvent, params.confirmParams ?? {});
            }

            if (result.isDenied && params.denyEvent) {
                Livewire.dispatch(params.denyEvent, params.denyParams ?? {});
            }
        });
    });

    /**
     * Intercepta falhas de requisição Livewire (validação 422, erro 500,
     * etc.) e mostra um retorno visual em vez do overlay padrão do Livewire.
     */
    Livewire.hook('request', ({ fail }) => {
        fail(({ status, content, preventDefault }) => {
            if (status === 419) {
                toastr.error('Sua sessão expirou. Recarregue a página e faça login novamente.', 'Sessão expirada');
                preventDefault();
                return;
            }

            if (status === 422) {
                let mensagem = 'Existem campos inválidos no formulário.';
                try {
                    const dados = JSON.parse(content);
                    mensagem = dados.message ?? mensagem;
                } catch (e) {
                    // conteúdo não é JSON, mantém mensagem genérica
                }
                toastr.error(mensagem, 'Verifique os dados');
                preventDefault();
                return;
            }

            if (status === 500) {
                Swal.fire({
                    icon: 'error',
                    title: 'Falha ao executar esta ação',
                    text: 'Ocorreu um erro inesperado. Tente novamente ou avise o suporte se persistir.',
                    confirmButtonText: 'Fechar',
                });
                preventDefault();
            }
        });
    });
});

/**
 * Reinicializa plugins jQuery (Select2, jQuery Mask) que não reagem
 * sozinhos ao DOM morphing do Livewire — precisam ser religados depois de
 * cada atualização de componente.
 */
document.addEventListener('livewire:init', () => {
    Livewire.hook('morph.updated', ({ el }) => {
        if (typeof window.jQuery === 'undefined') {
            return;
        }

        const $el = window.jQuery(el);

        if ($el.find('.select2').length && typeof $el.find('.select2').select2 === 'function') {
            $el.find('.select2').select2({ theme: 'bootstrap4', placeholder: 'Selecione...' });
        }

        if (typeof $el.find('.mask-cpf').mask === 'function') {
            $el.find('.mask-cpf').mask('000.000.000-00');
            $el.find('.mask-cnpj').mask('00.000.000/0000-00', { reverse: true });
            $el.find('.mask-telefone').mask('(00) 00000-0000');
            $el.find('.mask-cep').mask('00000-000');
            $el.find('.mask-data').mask('00/00/0000');
        }
    });
});
