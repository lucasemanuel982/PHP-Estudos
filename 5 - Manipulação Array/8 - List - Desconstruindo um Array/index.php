<?php


/*
Array_reduce - Serve para 
Primeiro Parâmetro - O nome do array 
Segundo Parâmetro - A função 
Terceiro Parâmetro - Valor inicial do primeiro parâmetro, ou seja, de onde irá começar a contar.  
*/


$array = ['Lucas', 23, 'Suco', 'Preto'];


//O List irá pegar o array e setar as variáveis informado pela ordem.
/*Ou seja, $nome terá 'Lucas', $idade terá 23, assim em diante */ 
list($nome, $idade, $bebida, $cor) = $array;
echo $nome." tem ".$idade." anos e gosta de tomar ".$bebida." e Gosta da Cor ".$cor;


// Uma outra forma de fazer é criando uma varíavel com o índice do array.

$nome = $array[0];
$idade = $array[1];
$bebida = $array[2];
$cor = $array[3];
echo $nome." tem ".$idade." anos e gosta de tomar ".$bebida." e Gosta da Cor ".$cor;
