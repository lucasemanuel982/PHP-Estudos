<?php

// Utilizando parâmetros na função. o "x" e o "y" são os parâmetros da função.
function soma($x, $y){
    $total = $x+$y;
    return $total;
}


echo soma(10,5) ."<br/>";
echo soma(10,15)."<br/>";
echo soma(10,25)."<br/>";


$a = soma(2,5);
$b = soma(5,5); 
$resultado = soma($a, $b);
echo $resultado."<br/>";