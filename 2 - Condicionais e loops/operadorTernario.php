<?php
$idade = 23;
// O operador ternário pode ser colocardo em uma variável ou já colocar direto no echo




echo ($idade <18) ?'Menor de Idade' : 'Maior de Idade';

// ou
$validarIdade = ($idade <18) ?'Menor de Idade' : 'Maior de Idade';

// Pode-se também retornar um boolean

($idade <18) ? false : true;
