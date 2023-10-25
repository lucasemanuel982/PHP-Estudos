<?php

// Arrow functions - É uma função Anônima simplificada em uma expressão
$adicao = fn($x, $y) => $x + $y;

echo $adicao(5,5);


// Função que verifica se um número é par
$isEven = fn($x) => $x % 2 === 0;
echo $isEven(7) ? 'É par' : 'É ímpar'; // Saída: É ímpar
