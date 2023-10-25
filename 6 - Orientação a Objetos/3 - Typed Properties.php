


<?php

// Se colocar um tipo diferente do que foi tipado irá gerar erro. 
class Exemplo {
    public string $texto;
    public int $numero;
    public ?array $lista;
}

$objeto = new Exemplo();
$objeto->texto = "Hello";
$objeto->numero = 42;
$objeto->lista = [1, 2, 3];
