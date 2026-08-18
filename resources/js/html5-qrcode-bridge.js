import { Html5QrcodeScanner } from 'html5-qrcode';

/**
 * Inicializa o scanner de câmera (QR code + código de barras 1D) num
 * elemento com o id informado. Só é chamado pela tela de importação de
 * nota fiscal (não faz parte do bundle carregado em todo lugar do app —
 * ver resources/js/app.js, importado condicionalmente).
 *
 * No sucesso da leitura, despacha o texto decodificado para o componente
 * Livewire via Livewire.dispatch (mesmo padrão já usado no resto do
 * projeto para eventos JS -> PHP, ver livewire-bridge.js).
 */
window.iniciarScannerNotaFiscal = function (containerId) {
    const scanner = new Html5QrcodeScanner(
        containerId,
        {
            fps: 10,
            qrbox: { width: 280, height: 180 },
            useBarCodeDetectorIfSupported: true,
        },
        false,
    );

    scanner.render((textoDecodificado) => {
        scanner.clear();
        window.Livewire.dispatch('leitura-realizada', { texto: textoDecodificado });
    }, () => {
        // Falha de leitura em um frame só — ignorado de propósito, o
        // scanner continua tentando nos próximos frames.
    });

    return scanner;
};
