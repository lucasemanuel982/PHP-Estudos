O pen-Closed Principle (Princípio do Aberto/Fechado): 
    As entidades de software (classes, módulos, etc.) devem ser abertas para extensão, mas fechadas para modificação. Em vez de alterar o código existente, ele deve ser estendido por meio de herança, interfaces ou outros mecanismos de extensão.

<?php

// Implementação sem o "o" do sOlid
class ContratoCLT {
    public function calcSalario(){ }
}

class Estagio {
    public function bolsaAuxilio(){ }
}

class FolhaDePagameto {
    public function calcular($funcionario){
        $salario=0;

        if($funcionario instanceof ContratoCLT){
            $salario = $funcionario->calcSalario();
        }elseif($funcionario instanceof Estagio){
            $salario = $funcionario->bolsaAuxilio();
        }

        return $salario;
     }
}



// Com a implementação do "o" do sOlid.

interface Remunevarel {
    public function remuneraçao(); //Aqui seria implementada a função de calculo.
}


class ContratoCLT  implements Remunevarel{
    public function remuneraçao(){ }
}

class Estagio  implements Remunevarel{
    public function remuneraçao(){ }
}

class FolhaDePagameto {
    public function calcular( Remunevarel $funcionario){
        return $funcionario->remuneraçao();
     }
}

