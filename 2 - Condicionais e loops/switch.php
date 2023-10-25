<!-- Condinional switch -->

<?php

$tipo = 'video';

switch($tipo){
    case 'foto':
        echo 'Exibindo Foto!';
        break;
    case 'video':
        echo 'Exibindo Vídeo!';
        break;
    case 'texto':
        echo 'Exibindo Texto!';
        break;
}

// Um modelo um pouco mais complexo:

$usuario = "admin";
$permissao = "editar";

switch ($usuario) {
    case "admin":
        switch ($permissao) {
            case "visualizar":
                echo "Permissão de visualização concedida para o administrador.";
                break;
            case "editar":
                echo "Permissão de edição concedida para o administrador.";
                break;
            case "excluir":
                echo "Permissão de exclusão concedida para o administrador.";
                break;
            default:
                echo "Permissão inválida para o administrador.";
                break;
        }
        break;
    case "usuario":
        switch ($permissao) {
            case "visualizar":
                echo "Permissão de visualização concedida para o usuário.";
                break;
            case "editar":
                echo "Permissão de edição concedida para o usuário.";
                break;
            default:
                echo "Permissão inválida para o usuário.";
                break;
        }
        break;
    default:
        echo "Tipo de usuário inválido.";
        break;
}
