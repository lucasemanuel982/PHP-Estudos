<?php

// range, cria um array  aleatório
/*
Primeiro parâmetro - Número inicial
Segundo parâmetro - Número final
Terceiro parâmetro - intervalo
*/

// Array de 1 a 20 com intervale de 2 em 2
$array = range(1,20, 2);

foreach ($array as $item) {
    echo $item. "<br/>";
}


// Também é realizado com string
echo "<br/>";


$array2 = range('a', 'l');

foreach ($array2 as $item) {
    echo $item. "<br/>";
}