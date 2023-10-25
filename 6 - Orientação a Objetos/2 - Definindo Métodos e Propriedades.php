<!-- public: Uma propriedade ou método declarado como público pode ser acessado de qualquer lugar, tanto dentro da classe quanto fora dela. Isso significa que outros objetos podem acessar e modificar essas propriedades diretamente.

private: Uma propriedade ou método declarado como privado só pode ser acessado dentro da própria classe. Isso significa que eles não podem ser acessados ou modificados diretamente por outros objetos ou fora da classe. Os membros privados são úteis para encapsular a implementação interna da classe e proteger seus dados sensíveis.

protected: Uma propriedade ou método declarado como protegido pode ser acessado dentro da classe em que foi definido e também em classes derivadas (herdadas) dessa classe. Ou seja, propriedades e métodos protegidos são acessíveis somente dentro da classe em si e suas subclasses.

Aqui está um exemplo que ilustra esses modificadores de acesso: -->

<?php 
class Exemplo {
    public $publico;     // Propriedade pública
    private $privado;    // Propriedade privada
    protected $protegido; // Propriedade protegida

    public function __construct() {
        $this->publico = "Acesso público";
        $this->privado = "Acesso privado";
        $this->protegido = "Acesso protegido";
    }

    public function exibirDados() {
        echo $this->publico;    // Acesso permitido
        echo $this->privado;   // Acesso permitido somente dentro da classe
        echo $this->protegido; // Acesso permitido dentro da classe e subclasses
    }
}

$objeto = new Exemplo();
echo $objeto->publico. '</br>';    // Acesso permitido
// echo $objeto->privado;   // Acesso não permitido (erro)
// echo $objeto->protegido; // Acesso não permitido (erro)

$objeto->exibirDados(); // Método acessa e exibe todas as propriedades




class Exemplo2{
    public $publico;     // Propriedade pública
    private $privado;    // Propriedade privada
    protected $protegido; // Propriedade protegida

    public function __construct() {
        $this->publico = "Acesso público";
        $this->privado = "Acesso privado";
        $this->protegido = "Acesso protegido";
    }

    public function exibirDados() {
        $dados = array();
        $dados[] = $this->publico;
        $dados[] = $this->privado;
        $dados[] = $this->protegido;
        return $dados;
    }
}

$objeto = new Exemplo2();
echo $objeto->publico. '</br>';    // Acesso permitido

$resultado = implode(', ', $objeto->exibirDados()) . '</br>';
echo $resultado;

