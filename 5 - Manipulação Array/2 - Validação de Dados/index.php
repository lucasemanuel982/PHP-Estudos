
<?php
$array = [
    'nome' => 'Lucas',
    'idade' => 23,
    'empresa' => 'B7Web',
    'cor' => 'Azul',
    'profissao' => 'Fazedor de Bolo'
];

// key_exist - Serve para validar se o parâmetro(chave ou índice) informado tem no array.
if (key_exists('idade', $array)) {
    $idade = $array['idade'];
    $nome = $array['nome'];
    echo $nome." tem ".$idade . ' anos';
} else {
    echo 'Não tem idade.';
}
