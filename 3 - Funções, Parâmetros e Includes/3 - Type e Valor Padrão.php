<?php

// Definindo o valor padrão. Neste caso abaixo o parâmetro "Z" tem o valor padrão "0". mesmo se eu não passar ele será interpretado como zero. 
function soma($x, $y, $z =0){
    $total = $x+$y; //Nesse caso está sendo somado o x,y e z. Como o z é igual a zero não irá alterar. 
    return $total;
}


// Definindo o tipo de dado que a função irá receber como parâmetro
function soma1(int $x, int $y, int $z =0){
    // É só colocar antes do parâmetro o tipo de dado.
    // Ao passar o tipo, serve como proteção de uma função. A função só vai funcionar se o parâmetro for do determinado tipo que foi implementado. 
    $total = $x+$y; 
    return $total;
}


// Para ser feito uma referência é só acrescentar o ícone "&" antes do cifrão do parâmetro.
/* Ficando assim: 

function soma($x, $y, &$total){
    $total = $x+$y; 
    return $total;
}

*/