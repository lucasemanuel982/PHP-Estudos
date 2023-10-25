<?php
require 'config.php';
require './dao/UsuarioDAOMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);
$lista = $usuarioDAO->findAll();

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
            <td><?=$usuario->getId();?></td>
            <!-- Pegando todos os nomes -->
            <td><?=$usuario->getNome();?></td>
            <!-- Pegando todos os e-mails -->
            <td><?=$usuario->getEmail();?></td>
            <!-- Colocando os botoões de Editar e Excluir -->
            <td>
                <a href="editar.php?id=<?=$usuario->getId();?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario->getId();?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>