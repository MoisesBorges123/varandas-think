<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Código IBGE -> UF
    |--------------------------------------------------------------------------
    |
    | Os 2 primeiros dígitos da chave de acesso de qualquer NF-e/NFC-e são o
    | código IBGE do estado emissor (padrão oficial, não muda). Usado hoje só
    | para exibir/gravar a UF do fornecedor — a busca em si não depende mais
    | disso (ver portal_nacional_nfe abaixo).
    |
    */

    'ibge_para_uf' => [
        '11' => 'RO', '12' => 'AC', '13' => 'AM', '14' => 'RR', '15' => 'PA',
        '16' => 'AP', '17' => 'TO', '21' => 'MA', '22' => 'PI', '23' => 'CE',
        '24' => 'RN', '25' => 'PB', '26' => 'PE', '27' => 'AL', '28' => 'SE',
        '29' => 'BA', '31' => 'MG', '32' => 'ES', '33' => 'RJ', '35' => 'SP',
        '41' => 'PR', '42' => 'SC', '43' => 'RS', '50' => 'MS', '51' => 'MT',
        '52' => 'GO', '53' => 'DF',
    ],

    /*
    |--------------------------------------------------------------------------
    | Portal nacional de consulta pública da NF-e
    |--------------------------------------------------------------------------
    |
    | Usado quando a leitura foi por chave de acesso (código de barras da
    | DANFE de um fornecedor, ou digitada à mão) — diferente do cupom fiscal
    | (NFC-e), cuja URL de consulta já vem completa dentro do próprio QR code
    | e não passa por aqui.
    |
    | Confirmado com uma DANFE real: a consulta de NF-e de fornecedor aponta
    | pro portal NACIONAL (não um portal por estado como o NFC-e) — o rodapé
    | da DANFE diz literalmente "Consulta de autenticidade no portal nacional
    | da NF-e www.nfe.fazenda.gov.br/portal".
    |
    | RISCO CONHECIDO: a consulta pública desse portal costuma ter captcha,
    | o que pode bloquear o scraping automático na prática. Só vamos saber
    | testando contra uma nota real — se travar, o caminho de upload de XML
    | continua funcionando normalmente como alternativa.
    |
    */

    'portal_nacional_nfe' => 'https://www.nfe.fazenda.gov.br/portal/consultaRecaptcha.aspx',

];
