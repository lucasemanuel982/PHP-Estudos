<!-- Null CAO - serve para tratamento de erros junto com operador ternário 
É como se fosse uma simplificação do operador Ternário. -->

<?php

// Enquanto nome não existir será colocado a palavra visitante no lugar
$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobrenome ?? ' ';  // Enquanto sobrenome não existe é colocado string vazio

echo $nomeCompleto;
