L iskov Substitution Principle (Princípio da Substituição de Liskov):
     Os objetos de uma classe derivada devem poder ser substituídos pelos objetos de sua classe base sem interromper o comportamento esperado do programa. Isso garante a compatibilidade dos tipos e promove a reutilização do código.

<?php

class A {
    public function getNome() {
        return "Meu nome é A";
    }
}

class B extends A {
    // Realizando a alteração da função
    public function getNome() {
        return "Meu nome é B";
        // Contudo, se for alterado o tipo de retorno terá problema.
    }
}

function imprimeNome(A $obj) {
    return $obj->getNome(); 
}

$objetol = new A();
$objeto2 = new B();
echo imprimeNome ($objetol)."<br/>";
echo imprimeNome ($objeto2) ;
