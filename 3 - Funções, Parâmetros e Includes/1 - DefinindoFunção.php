<?php

// Criando a função
function subsequente(){
    for ($i=0; $i <10 ; $i++) { 
        echo $i. "<br/>";
    }
    echo $i. "<hr/>";
}

// Chamando  a função

subsequente();
subsequente();


/*
A primeira linha declara uma função chamada subsequente usando a palavra-chave function. A função não recebe nenhum parâmetro, pois os parênteses estão vazios.

A próxima linha inicia um loop for com a inicialização $i = 0. Isso define a variável $i como 0 antes do início do loop.

A condição do loop é $i < 10, ou seja, o loop continuará enquanto o valor de $i for menor que 10.

A expressão $i++ é executada após cada iteração do loop. Ela incrementa o valor de $i em 1.

Dentro do loop, a linha echo $i . "<br/>"; exibe o valor atual de $i, seguido por uma quebra de linha <br/>.

Após o término do loop, a linha echo $i . "<hr/>"; exibe o último valor de $i, seguido por uma linha horizontal <hr/>.
*/