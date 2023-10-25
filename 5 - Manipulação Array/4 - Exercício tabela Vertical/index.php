<?php
$array = [
    'nome' => 'Lucas',
    'idade' => 23,
    'empresa' => 'Show',
    'cor' => 'Preto',
    'profissao' => 'Analista de Software JR'
];



?>

<table border="1">
    <?php foreach ($array as $chaves => $valor) : ?>
        </tr>
        <th><?php echo $chaves ?></th>
        <td><?php echo $valor ?></td>
        </tr>
    <?php endforeach; ?>


</table>