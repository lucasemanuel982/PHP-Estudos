<?php 
// O array é só colocar dentro de colchete "[]"
$ingredientes = ['Farinha','Ovo','Manteiga','Açúcar','Leite'];

// Realizar a filtragem


echo $ingredientes[2];


// Array Spread - Copia um outro array 

$ingredientes2 =[
    ...$ingredientes, //Está sendo copiado todos os itens do array ingredientes para o ingredientes2
    'recheio'
];



echo "<BR/>" .$ingredientes2[5]. "<BR/>";
print_r($ingredientes2)

?>