<?php
require "config.php";
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {
    // Informando que os dados serão inseridos.
    // O método prepare() prepara uma query SQL para verificar possibilidades de ataques ao banco de dados.
    $sql =$pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
    // bindValue: Vincula um valor direto a um parâmetro. 
    $sql->bindValue(':name',$name);
    // email terá o valor informado na variável $email
    // bindParam: Vincula um parâmetro a uma variável específica. 
    // O método bindParam() permite que o valor da variável seja declarado posteriormente.
    // $sql->bindParam(':email',$email);
    $sql->bindValue(':email',$email);
    // Neste caso só iremos utilizar o bindValue
    $sql->execute();

    // Quando executar voltará para a tela
    header("Location: index.php");
    exit;
    
}else{
    header("Location: adicionar.php");
    exit;
}




