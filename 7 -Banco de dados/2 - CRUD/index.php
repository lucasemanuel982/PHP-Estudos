<?php
require 'config.php';

// Criado uma lista vazia para ser armazenado os dados
$lista = [];
// Trazendo as informações do banco
$sql = $pdo->query("SELECT * FROM usuarios");
// Feito a validação se tem algum usuário no banco
if($sql->rowCount() > 0) {
    // Realizando a associação
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<a href="adicionar.php">ADICIONAR USUÁRIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>

    <!-- Colocando os ":" da para colocar códigos HTML entre os códigos PHP -->
    <?php foreach($lista as $usuario): ?>
        <tr>
            <!-- Pegando todos os ID -->
            <td><?=$usuario['id'];?></td>
            <!-- Pegando todos os nomes -->
            <td><?=$usuario['nome'];?></td>
            <!-- Pegando todos os e-mails -->
            <td><?=$usuario['email'];?></td>
            <!-- Colocando os botoões de Editar e Excluir -->
            <td>
                <a href="editar.php?id=<?=$usuario['id'];?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>