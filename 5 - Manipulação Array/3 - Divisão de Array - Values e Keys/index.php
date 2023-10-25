
<?php
$array = [
    'nome' => 'Lucas',
    'idade' => 23,
    'empresa' => 'Show',
    'cor' => 'Preto',
    'profissao' => 'Analista de Software JR'
];

// array_keys - Serve para pegar as chaves do array que está passando e gera um novo arry só com as chaves.
print_r(array_keys($array));
// array_values - Serve para pegar os valores do array que está passando e gera um novo arry só com os valores. 
echo "<br/>";
print_r(array_values($array));
