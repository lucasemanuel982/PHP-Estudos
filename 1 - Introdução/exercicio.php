<?php 
$lista = [
    // Chave => Valor
    'nome' => 'Lucas',
    'idade' => 23, 
    'atributos' => [
        'força' => 70,
        'agilidade' => 80,
        'destreza' => 70
    ],
    $vida = 1000,
    $mana = 928,
];
// Para acessar o valor é só colocar o nome do Array e em seguida a chave que deseja, como no código abaixo.
$lista['destreza'];


echo "Nome: ".$lista['nome']. "<br/>";
echo "Idade: ".$lista['idade']. "<br/>";
echo "Destreza ".$lista['atributos'] ['destreza'];