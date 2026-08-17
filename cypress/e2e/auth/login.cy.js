describe('Login', () => {
    it('renderiza o formulário estilizado Admitro, não a welcome page padrão', () => {
        cy.visit('/login');
        cy.contains('Entre com seu usuário');
        cy.get('input[type="email"]').should('be.visible');
        cy.get('input[type="password"]').should('be.visible');
    });

    it('credenciais inválidas mostram um toastr de erro e não autenticam', () => {
        cy.visit('/login');
        cy.get('input[type="email"]').type('admin@varandas.local');
        cy.get('input[type="password"]').type('senha-errada');
        cy.get('button[type="submit"]').contains('Entrar').click();

        cy.get('.toast-error', { timeout: 8000 }).should('be.visible');
        cy.url().should('include', '/login');
    });

    it('credenciais válidas autenticam e redirecionam para o painel', () => {
        cy.login();
        cy.contains('Administrador');
    });
});
