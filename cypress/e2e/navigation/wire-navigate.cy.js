describe('Navegação SPA (wire:navigate)', () => {
    beforeEach(() => {
        cy.login();
    });

    it('navega entre Cardápio e Estoque sem recarregar a página inteira', () => {
        // Marca a window atual — se sobreviver ao clique, prova que não
        // houve reload de página cheia (wire:navigate troca só o <body>).
        cy.window().then((win) => {
            win.__semReloadCheio = true;
        });

        cy.get('.app-sidebar').contains('Cardápio').click();
        cy.get('.app-sidebar').contains('Produtos').click();

        cy.url().should('include', '/cardapio/produtos');
        cy.window().its('__semReloadCheio').should('eq', true);
    });

    it('marca como ativo só a seção do menu correspondente à página atual (Cardápio)', () => {
        cy.visit('/cardapio/produtos');

        cy.contains('.app-sidebar li.slide', 'Cardápio').should('have.class', 'is-expanded');
        cy.contains('.app-sidebar li.slide', 'Cardápio').find('> a').should('have.class', 'active');

        cy.contains('.app-sidebar li.slide', 'Estoque').should('not.have.class', 'is-expanded');
        cy.contains('.app-sidebar li.slide', 'Estoque').find('> a').should('not.have.class', 'active');
    });

    it('marca como ativo só a seção do menu correspondente à página atual (Estoque)', () => {
        cy.visit('/estoque/ingredientes');

        cy.contains('.app-sidebar li.slide', 'Estoque').should('have.class', 'is-expanded');
        cy.contains('.app-sidebar li.slide', 'Estoque').find('> a').should('have.class', 'active');

        cy.contains('.app-sidebar li.slide', 'Cardápio').should('not.have.class', 'is-expanded');
        cy.contains('.app-sidebar li.slide', 'Cardápio').find('> a').should('not.have.class', 'active');
    });

    it('o estado ativo do menu se atualiza corretamente ao navegar de uma seção para outra', () => {
        cy.visit('/cardapio/produtos');
        cy.contains('.app-sidebar li.slide', 'Cardápio').should('have.class', 'is-expanded');

        cy.get('.app-sidebar').contains('Estoque').click();
        cy.get('.app-sidebar').contains('Insumos').click();

        cy.url().should('include', '/estoque/ingredientes');
        cy.contains('.app-sidebar li.slide', 'Estoque').should('have.class', 'is-expanded');
        cy.contains('.app-sidebar li.slide', 'Cardápio').should('not.have.class', 'is-expanded');
    });

    it('navega por várias páginas sem gerar erro de console (jQuery/plugins do Admitro)', () => {
        cy.visit('/painel');
        cy.get('.app-sidebar').contains('Cardápio').click();
        // Aguarda a animação de abertura do submenu terminar (evita clicar
        // num item que ainda está coberto pelo <ul> em transição).
        cy.get('.app-sidebar').contains('Categorias').should('be.visible').click();
        cy.url().should('include', '/cardapio/categorias');

        cy.get('.app-sidebar').contains('Cardápio').click();
        cy.get('.app-sidebar').contains('Produtos').should('be.visible').click();
        cy.url().should('include', '/cardapio/produtos');

        cy.get('.app-sidebar').contains('Estoque').click();
        cy.get('.app-sidebar').contains('Grupos de equivalência').should('be.visible').click();
        cy.url().should('include', '/estoque/grupos-equivalencia');

        // Se algum script do tema (custom.js, p-scroll.js etc.) lançar um
        // erro não tratado em qualquer uma dessas navegações, o Cypress
        // falha o teste automaticamente (ver cypress/support/e2e.js).
    });
});
