<?php
// filter_input - é usada para filtrar e validar dados vindos de uma fonte externa, como dados enviados por formulários HTML ou parâmetros de URL.
$nome = filter_input(INPUT_GET, 'nome'); 
$idade = filter_input(INPUT_GET, 'idade');

// Realizando a verificação se enviou o nome e a idade
if($nome && $idade){
    echo 'NOME: '.$nome."<br/>";
    echo 'IDADE: '.$idade;
} else { 
    header("Location: index.php");
    exit;
    // exit - cancela a execução de todo o restante do código
}