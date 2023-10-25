<?php
$array = [
    'nome' => 'Lucas',
    'idade' => 23,
    'empresa' => 'Show',
    'cor' => 'Preto',
    'profissao' => 'Analista de Software JR'
];


/*
Array_slice - Serve para extrair uma parcela de um array, criando um novo array
Primeiro Parâmetro - O nome do array 
Segundo Parâmetro - De onde irá começar a pegar
Terceiro Parâmetro - Até quantos chaves-índices deseja pegar. 

*/
$retorno = array_slice($array, 1,3);
print_r($retorno);

echo '<br/>';

// Também podemos fazer voltando, é só colocar o segundo parêmtro negativo. 
$retorno2 = array_slice($array, -1,3);
print_r($retorno2);