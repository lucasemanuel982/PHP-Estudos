<?php
// Essa linha inclui o arquivo 'config.php' no código atual. Esse arquivo contém as configurações e a conexão com o banco de dados.
require 'config.php';


// Essas linhas usam a função filter_input para obter os valores das variáveis 'id', 'name' e 'email' a partir do método POST. A função filter_input é usada para filtrar e validar a entrada do usuário. O último argumento FILTER_VALIDATE_EMAIL é usado para validar se o valor do campo 'email' é um endereço de email válido.
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email) {

    // Essa linha prepara uma instrução SQL para atualizar os registros na tabela 'usuarios' com os novos valores fornecidos para 'name' e 'email', onde o campo 'id' corresponde ao valor fornecido para a variável 'id'.
    $sql = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");

    $existingEmail = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
    $existingEmail->bindValue(':email', $email);
    $existingEmail->execute();


    if($existingEmail->rowCount() === 0){
        // Essas linhas vinculam os valores das variáveis 'name', 'email' e 'id' aos parâmetros na instrução SQL preparada. Isso é feito usando o método bindValue, que associa um valor a um marcador de posição na consulta preparada.
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id', $id);
        $sql->execute();
        header("Location: index.php");
        exit;
    }else{
        header("Location: editar.php?id=".$id);
        exit;
    }

    // Essa linha executa a consulta preparada, ou seja, executa a atualização dos registros na tabela 'usuarios' com os novos valores fornecidos.
    

    // Essas linhas redirecionam o usuário para o arquivo 'index.php' após a execução bem-sucedida da atualização no banco de dados. A função header é usada para enviar um cabeçalho HTTP para o navegador, instruindo-o a redirecionar para uma determinada página.
   
    
} else {

    // Se a condição do bloco condicional na linha 7 não for atendida (ou seja, se alguma das variáveis 'id', 'name' ou 'email' estiver faltando ou não for válida), o código redirecionará o usuário para o arquivo 'adicionar.php'. Isso provavelmente significa que algum campo obrigatório não foi preenchido corretamente. O exit é usado para encerrar a execução do script após o redirecionamento.
    header("Location: editar.php");
    exit;
}