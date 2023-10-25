S ingle Responsibility Principle (Princípio da Responsabilidade Única): 
    Cada classe deve ter apenas uma responsabilidade, ou seja, deve ter apenas um motivo para ser alterada. Isso ajuda a manter as classes mais focadas, coesas e fáceis de manter.

<?php

// sem a implementação do "s" do solid
class Usuario{
    public function setNome(){}
    public function getNome(){}

    public function add(){}
    public function update(){}
    public function delete(){}
}


// Realizando  implementaçãodo do "S" do solid seria assim.
//  Onde cada classe tem a sua devida função para fácil entendimento e orgaização.

class Usuario{ 
    public function setNome(){}
    public function getNome(){}
}


class UsuarioDB{
    public function add(){}
    public function update(){}
    public function delete(){}
}