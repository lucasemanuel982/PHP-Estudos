<!-- Injeção de Dependência (ou Dependency Injection, em inglês) é um princípio da programação orientada a objetos que busca reduzir o acoplamento entre classes e promover a reutilização de código, tornando o código mais flexível e modular.

Em PHP, a Injeção de Dependência é um padrão de projeto que permite passar as dependências de uma classe externamente, em vez de criar ou instanciar as dependências dentro da própria classe. Isso significa que a classe não é responsável por criar ou conhecer detalhes sobre suas dependências, mas sim recebe essas dependências prontas de uma fonte externa. -->

<?php

// Construtor de Injeção de Dependência:
// Nesse padrão, as dependências são passadas para a classe por meio do construtor. A classe define parâmetros em seu construtor que representam as dependências necessárias e essas dependências são fornecidas quando a classe é instanciada. Veja um exemplo:
// php

class Dependencia {
    public function fazerAlgo() {
      // Lógica da dependência
    }
  }
  
  class MinhaClasse {
    private $dependencia;
  
    public function __construct(Dependencia $dependencia) {
      $this->dependencia = $dependencia;
    }
  
    public function meuMetodo() {
      $this->dependencia->fazerAlgo();
      // Resto da lógica da classe
    }
  }
  
  // Criar uma instância da classe de dependência
  $dependencia = new Dependencia();
  
  // Criar uma instância da classe principal e injetar a dependência
  $objeto = new MinhaClasse($dependencia);
  
  // Chamar um método da classe principal que utiliza a dependência
  $objeto->meuMetodo();
  