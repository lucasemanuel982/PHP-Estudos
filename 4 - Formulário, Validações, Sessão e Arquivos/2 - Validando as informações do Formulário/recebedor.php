<?php

// FILTER_VALIDATE - Serve para realizar a validação 
// também tem o FILTER_SANITIZE - que irá pegar o que não for de acordo e remover/apagar.
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); 
// Neste caso está pegando tudo que o usuário digitou será aceito, caso o usuário digite um código malicoso ou qualquer código HTML não será interpretado como código.
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL); 
$idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);
// Neste caso o SANITIZE está pegando tudo que for string e removendo. 


// A função filter_var retorna o valor filtrado se passar na validação do filtro especificado ou false caso contrário.




if($nome && $idade && $email){
    echo 'NOME: '.$nome."<br/>";
    echo 'E-mail: '.$email."<br/>";
    echo 'IDADE: '.$idade;
} else { 
    header("Location: index.php");
    exit;
}


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<br/>".'Endereço de e-mail válido';
} else {
    echo 'Endereço de e-mail inválido';
}