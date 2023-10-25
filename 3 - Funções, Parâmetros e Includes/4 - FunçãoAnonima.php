<?php

// Para realizar uma função anônima tem 2 modos:
/*
1 - Através de uma variável
2 - Passando por um parâmetro
*/
// Modo 1
$valor = function (int $total) {
  return $total * 10;
};

// Criei uma variável onde está sendo atribuida a função anônima "$valor" a ela.
$valorTotal = $valor;

echo $valorTotal(10);



// Modo 2 

function executarOperacao($a, $b, $funcao)
{
  $resultado = $funcao($a, $b);
  echo "O resultado da operação é: " . $resultado;
}


// Chamando a função executarOperacao e passando a função anônima como parâmetro
executarOperacao(5, 3, $adicao = function ($x, $y) { // Função anônima para realizar uma adição
  return $x + $y;
});
