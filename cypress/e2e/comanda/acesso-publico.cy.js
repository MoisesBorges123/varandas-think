describe('Acesso público à comanda (fluxo do cliente via QR code)', () => {
    // Cypress falha o teste automaticamente se o app disparar um erro JS
    // não tratado (é exatamente o bug real que este teste existe pra pegar:
    // "pedirLocalizacao is not defined" travava a tela em "Confirmando
    // localização..." pra sempre, sem nenhum erro visível pro usuário).
    it('não trava em "Confirmando localização" e não gera erro JS, mesmo com token inválido', () => {
        cy.visit('/comanda/token-que-nao-existe-neste-teste', {
            onBeforeLoad(win) {
                cy.stub(win.navigator.geolocation, 'getCurrentPosition').callsFake((sucesso) => {
                    sucesso({ coords: { latitude: -23.5505, longitude: -46.6333 } });
                });
            },
        });

        cy.contains('Confirmando sua localização...');
        cy.contains('Confirmando sua localização...', { timeout: 8000 }).should('not.exist');
        cy.contains('Esse link não está disponível no momento').should('be.visible');
    });

    it('mesa com token inválido responde 404 (id sequencial não funciona mais como token)', () => {
        cy.request({ url: '/comanda/mesa/1', failOnStatusCode: false }).its('status').should('eq', 404);
    });
});
