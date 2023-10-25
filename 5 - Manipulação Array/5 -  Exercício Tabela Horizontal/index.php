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
    <thead>
        </tr>
        <?php foreach ($array as $chaves => $valor) : ?>
            <th><?php echo $chaves ?></th>
        <?php endforeach; ?>
        </tr>
    </thead>

    <tbody>
        </tr>
        <?php foreach ($array as $chaves => $valor) : ?>
            <td><?php echo $valor ?></td>
        <?php endforeach; ?>
        </tr>
    </tbody>
</table>


<!-- Também tem este outro modo -->

<?php
$chaves = array_keys($array);
$valor = array_values($array);
?>
<table border="1">
    <thead>
        </tr>
        <?php foreach ($chaves as $chaves) : ?>
            <th><?php echo $chaves ?></th>
        <?php endforeach; ?>
        </tr>
    </thead>

    <tbody>
        </tr>
        <?php foreach ($valor as $valor) : ?>
            <td><?php echo $valor ?></td>
        <?php endforeach; ?>
        </tr>
    </tbody>
</table>

