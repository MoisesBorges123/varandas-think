/**
 * Login via o formulário Livewire real (não bypass de sessão) — garante
 * que o fluxo de autenticação em si continua funcionando a cada execução.
 */
Cypress.Commands.add('login', (email = 'admin@varandas.local', password = 'password') => {
    cy.visit('/login');
    cy.get('input[type="email"]').type(email);
    cy.get('input[type="password"]').type(password);
    cy.get('button[type="submit"]').contains('Entrar').click();
    cy.url().should('include', '/painel');
});
