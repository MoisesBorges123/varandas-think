import './commands';

// Nenhum handler de uncaught:exception aqui de propósito: o comportamento
// padrão do Cypress (falhar o teste quando o navegador registra um erro JS
// não tratado) é exatamente o que queremos — foi assim que pegamos os bugs
// reais do PerfectScrollbar/ratingStars ao migrar para wire:navigate.
