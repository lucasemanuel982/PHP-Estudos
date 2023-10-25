<?php

/*
1 - Variável auxiliar 
2 - Condição
3 - Incremento ou decremento
*/
for ($i=0 ; $i <= 5 ; $i++ ) { 
    echo "N:" .$i. "<br/>";
}


// Tabuada
for ($i=1 ; $i <= 5 ; $i++ ) {
    echo "Tabuada de ".$i. "<br/>";
    for ($a=1; $a <= 10; $a++) { 
        echo $i. " x " .$a. " = " .$i*$a. "<br/>";
    }
    echo "<br/>";
}