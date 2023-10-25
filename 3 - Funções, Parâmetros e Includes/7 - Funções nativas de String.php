<?php

$nome = '    Lucas   Emanuel     ';
$nomeCompleto = 'lucas emanuel silva dos santos';

// trim - Remove os espaços
echo "Removendo os espaços: ".trim($nome). "<br/>";

// strlen - número de quantos caracteres tem 
echo "Contando quantos caracteres tem: ".strlen($nome). "<br/>";

// strtolower - Deixa tudo minúsculo
echo "Deixando tudo minúsculo: ".strtolower($nome). "<br/>";

// strtoupper - Deixa tudo Maiúsculo
echo "Deixando tudo Maiúsculo: ".strtoupper($nome). "<br/>";

// str_replace - substituindo palavra ou letra
echo "Substituindo a letra a por 3: ".str_replace("a","3", $nome). "<br/>";

// substr - Pega o determinado número de caracteres da string
echo substr($nome, 4, 3). "<br/>";
// Estou pegando 3 caracteres a partir do 3 caractere. 


// strpos - Valida se tem a plavra na string e retorna o índice. 
echo strpos($nome, 'Emanuel'). "<br/>";


// ucfirst - Coloca  primeira letra em maiúsculo
echo ucfirst('lucas'). "<br/>";

// ucwords - Coloca  primeira letra em maiúsculo de cada palavra
echo ucwords('lucas emanuel silva dos santos'). "<br/>";


// explodes - dividir a palavra e transformar em uma array
// Neste caso abaixo está dividindo tudo que tiver com o espaço. 
$nomes =  explode(' ',$nomeCompleto);
print_r($nomes);