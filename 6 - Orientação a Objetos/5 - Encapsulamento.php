<!-- ideia de agrupar dados e comportamentos relacionados em uma única unidade, chamada de classe. O encapsulamento permite controlar o acesso aos dados, evitando modificações ou leituras diretas desses dados por partes externas ao objeto. Isso é alcançado definindo propriedades e métodos com diferentes níveis de acesso (public, private e protected).

O encapsulamento oferece os seguintes benefícios:

Proteção dos dados: As propriedades podem ser declaradas como privadas ou protegidas, impedindo o acesso direto a elas fora da classe. Isso evita que os dados sejam modificados de maneira inapropriada e ajuda a manter a integridade dos objetos.

Abstração: O encapsulamento permite que uma classe exponha apenas uma interface pública, ocultando a implementação interna e fornecendo uma forma abstrata de interação com o objeto. Isso ajuda a simplificar o uso do objeto e a reduzir a complexidade.

Flexibilidade: Ao encapsular dados e comportamentos em uma classe, é possível modificar a implementação interna da classe sem afetar o código externo que usa o objeto. Isso facilita a manutenção e evolução do sistema.

Aqui está um exemplo em PHP que ilustra o encapsulamento:
-->

<?php

class Pessoa {
    private $nome;
    private $idade;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function __construct($name, $age) {
        $this->nome = $name;
        $this->idade = $age;
    }
}

$pessoa = new Pessoa('Lucas' , 20); 
// $pessoa->setNome('João');
// $pessoa->setIdade(30);


echo $pessoa->getNome();  // Saída: João
echo $pessoa->getIdade(); // Saída: 30
?>
<!-- 
Neste exemplo, a classe Pessoa possui duas propriedades privadas: $nome e $idade. Ao definir essas propriedades como privadas, estamos encapsulando-as, tornando-as acessíveis apenas através dos métodos públicos getNome(), setNome(), getIdade() e setIdade().

Os métodos getter (getNome() e getIdade()) permitem que partes externas obtenham os valores das propriedades, enquanto os métodos setter (setNome() e setIdade()) permitem que partes externas atribuam novos valores às propriedades.

Dessa forma, o encapsulamento protege os dados da classe, permitindo um controle mais preciso sobre como os dados são acessados e modificados. Além disso, o encapsulamento fornece uma interface consistente e abstrata para interagir com o objeto, ocultando a implementação interna e facilitando o uso correto do objeto. -->