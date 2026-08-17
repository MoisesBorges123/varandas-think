import { defineConfig } from 'cypress';

export default defineConfig({
    e2e: {
        baseUrl: process.env.CYPRESS_BASE_URL || 'http://localhost:8000',
        supportFile: 'cypress/support/e2e.js',
        specPattern: 'cypress/e2e/**/*.cy.js',
        video: false,
        screenshotOnRunFailure: true,
        // O ambiente local roda em Docker com bind-mount no Windows, que é
        // consideravelmente mais lento que produção (respostas de ~4-5s não
        // são incomuns) — timeouts maiores que o padrão do Cypress evitam
        // falso-negativo por lentidão de infraestrutura, não da aplicação.
        defaultCommandTimeout: 20000,
        pageLoadTimeout: 30000,
        requestTimeout: 20000,
        responseTimeout: 20000,
    },
});
