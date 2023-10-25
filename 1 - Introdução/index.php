<!-- a tag do php é: "< ?php ?>"  ou "< ?php" e não fechar e o interpretador irá interpretar que tudo que estiver após isso será código PHP
A tag echo serve para mostrar na tela

-->


<?php
echo 'Lucas Emanuel';

//  Declaração de variável - É só colocar um "$" antes do nome 
$primeiroNome = 'Rio';
$segundoNome = 'de';
$terceiroNome = 'Janeiro';

$nomeCompleto = $primeiroNome.' ' .$segundoNome.' ' .$terceiroNome;
echo $nomeCompleto;

?>