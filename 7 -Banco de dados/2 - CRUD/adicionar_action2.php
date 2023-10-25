<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    // Fazendo validação se já existe um e-mail cadastrado e se já estiver recarrega a página
    // Caso não tenha faz o cadastro normalmente e vai para a tela de início (index.php)
    if($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->execute();

        header("Location: index.php");
        exit;
    } else {
        header("Location: adicionar.php" );
        exit;
    }
} else {
    header("Location: adicionar.php");
    exit;
}
