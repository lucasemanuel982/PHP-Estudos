<!-- Sessão pé diferente de cookie
Sessão fica armazeada no servidor 
Cookie - Fica armazenada do computador do usuário -->

<?php
// Este código serve para iniciar uma sessão
session_start();
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); 
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL); 
$idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);




if($nome && $idade && $email){

    $expiracao = time() +(86400 * 30);
    setcookie('nomeDoCookie', $nome, $expiracao);

    echo 'NOME: '.$nome."<br/>";
    echo 'E-mail: '.$email."<br/>";
    echo 'IDADE: '.$idade;
} else { 
    $_SESSION['Aviso'] = 'Preencha os itens corretamente!';
    header("Location: index.php");
    exit;
}


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<br/>".'Endereço de e-mail válido';
} else {
    echo 'Endereço de e-mail inválido';
}