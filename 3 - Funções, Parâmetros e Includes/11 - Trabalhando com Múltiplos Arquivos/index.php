<?php

// require - pega o que tem do outro arquivo
// require_once - se o comando tiver repetido ele não irá puxar duplicado e sim só uma única vez. 
require('header.php');
require_once('sobre.php');


// Qual a diferença do require para o include ?
/*
O requeri não permite a execução do código caso não encontre.
Já o include permite a execução do código mesmo com problema. 
*/