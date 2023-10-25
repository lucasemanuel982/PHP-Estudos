<!-- Uma classe é uma estrutura que define um conjunto de propriedades e métodos que podem ser utilizados para criar objetos. Uma classe é basicamente um modelo ou uma estrutura que descreve as características e o comportamento de um objeto.

Por outro lado, um objeto é uma instância de uma classe. Quando você cria um objeto, você está criando uma cópia da classe que possui suas próprias propriedades e métodos únicos. Um objeto representa uma entidade específica e pode ser manipulado e interagir com outros objetos por meio de métodos.

Em resumo, a diferença entre classes e objetos em PHP é que uma classe é uma estrutura que define um conjunto de propriedades e métodos, enquanto um objeto é uma instância dessa classe, que possui suas próprias características e pode interagir com outros objetos. -->

<?php

// Definindo uma classe chamada "Carro"
class Carro {
    public $modelo;
    public $cor;

    public function dirigir() {
        echo "O carro está sendo dirigido.";
    }
}

// Criando um objeto da classe "Carro"
$meuCarro = new Carro();

// Definindo as propriedades do objeto
$meuCarro->modelo = "Ferrari";
$meuCarro->cor = "Vermelho";

// Chamando o método do objeto
$meuCarro->dirigir();


 