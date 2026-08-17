describe('Cardápio > Categorias (CRUD)', () => {
    const nomeCategoria = `Categoria Cypress ${Date.now()}`;
    const nomeCategoriaEditada = `${nomeCategoria} (editada)`;

    beforeEach(() => {
        cy.login();
    });

    it('cria, edita e exclui uma categoria de ponta a ponta', () => {
        // Criar
        cy.visit('/cardapio/categorias');
        cy.contains('Nova categoria').click();
        cy.url().should('include', '/cardapio/categorias/criar');

        cy.get('input[wire\\:model="nome"]').type(nomeCategoria);
        cy.get('select[wire\\:model="destinoImpressao"]').select('Bar');
        cy.contains('button', 'Salvar').click();

        // Não checamos o toastr aqui de propósito: ele some sozinho depois
        // de alguns segundos (timeOut configurado no toastr) e, num
        // ambiente lento, o teste pode chegar tarde demais para vê-lo. O
        // resultado funcional (linha na tabela) é a prova real do que
        // importa.
        cy.url().should('include', '/cardapio/categorias');
        cy.contains('table tr', nomeCategoria).should('exist');

        // Editar
        cy.contains('table tr', nomeCategoria).find('a[title="Editar"]').click();
        cy.url().should('include', '/editar');
        cy.get('input[wire\\:model="nome"]').clear().type(nomeCategoriaEditada);
        cy.contains('button', 'Salvar').click();

        cy.url().should('include', '/cardapio/categorias');
        cy.contains('table tr', nomeCategoriaEditada).should('exist');

        // Excluir (confirma no modal SweetAlert2)
        cy.contains('table tr', nomeCategoriaEditada).find('button[title="Excluir"]').click();
        cy.get('.swal2-confirm', { timeout: 8000 }).click();

        cy.contains('table tr', nomeCategoriaEditada).should('not.exist');
    });
});
