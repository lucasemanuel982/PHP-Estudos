<?php

// Algumas funções com números

// abs- deixa o número positivo
$numero = -7.8;
echo "Deixando o número positivo".abs($numero). "<br/>";

// pi - número pi
echo "Número PI: ".pi(). "<br/>";

// floor - arredondar o número para baixo.
$numero = 5.8;
echo "Arredondando o número para baixo ".floor($numero). "<br/>";

// ceil - arredonda para cima
echo "Arredondando o número para cima ".ceil($numero). "<br/>";

// round -  arredonda o número e vai depender do número. 
echo "Arredondando número: ".round($numero). "<br/>";

// rand- gera número aleatório
echo "Gerando número aleatório de 0 a 100 = ".rand(0,100). "<br/>";

// max - maior número
$lista = [1,2,5,9];
echo "Maior número da Lista: ".max($lista). "<br/>";

// min - menor número
echo "Menor número da Lista: ".min($lista). "<br/>";