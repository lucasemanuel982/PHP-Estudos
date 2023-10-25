<?php

// 1 - Nome do banco de dados
// 2 - endereço do banco
// 3 - Usuário do banco
// 4 - Senha do banco (Como não tem senha coloca só as aspas)


$pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

// Também pode ser feito asism, porém, não é uma boa prática. 
// $db_name = 'test';
// $db_host = 'localhost';
// $db_user = 'root';
// $db_pass = "";

// $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);


// Fazendo uma consulta
//  query - serve para fazer uma consulta
$sql = $pdo->query('SELECT * FROM usuarios');

// Contagem dos dados
echo "Total: ".$sql->rowCount();

// PDO::FETCH_ASSOC - para não conter dados associados(duplicados)
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados);
