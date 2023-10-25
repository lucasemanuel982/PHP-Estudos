<!-- Exclusivo para trabalhar com arrays realizando varredura no array-->


<?php

$ingredientes = ['Farinha','Ovo','Manteiga','Açúcar','Leite']; 

// O código que você forneceu utiliza o laço de repetição foreach para percorrer um array chamado $ingredientes e exibir informações sobre cada elemento do array.
// $ingredientes é o nome do array que está sendo percorrido. Cada elemento do array será atribuído a uma variável temporária chamada $ingrediente.
// O operador => é usado para associar cada elemento do array à sua chave correspondente. No exemplo, a chave é armazenada na variável $ingrediente.
// A variável $ingre é usada para armazenar o valor de cada elemento do array.
foreach ($ingredientes as $ingrediente => $ingre) {
    echo "Ítem:" .($ingrediente + 1).": " .$ingre. "<br/>";
}



// Exercícios Traços

for ($i=1; $i <= 10 ; $i++) { 
    for ($c=1; $c <=10 ; $c++) { 
        echo "-";
    }
    echo "<br/>";
}


// Exercício traços 2 

$loop=null;
for ($i=1; $i <= 20 ; $i++) { 
    echo $loop.="-";
    echo "<br/>";
}

