<!-- Em PHP, o construtor é definido com o método especial __construct(). Ao criar um objeto utilizando o operador new, o construtor é invocado automaticamente. -->

<?php
class Pessoa {
    public string $nome;
    public int $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Um objeto Pessoa foi criado com nome $nome e idade $idade.";
    }
}

$pessoa = new Pessoa('João', 30);

// Neste exemplo, a classe Pessoa possui duas propriedades: $nome e $idade. O construtor __construct() recebe dois argumentos $nome e $idade, e atribui esses valores às propriedades correspondentes do objeto usando $this->nome e $this->idade.

// Quando um objeto $pessoa é criado com new Pessoa('João', 30), o construtor é chamado automaticamente e exibe a mensagem "Um objeto Pessoa foi criado com nome João e idade 30.".

// O construtor é útil para executar ações de inicialização, como configurar propriedades com valores iniciais ou realizar outras tarefas necessárias antes de usar o objeto. Ele também pode ser usado para validar e processar argumentos passados durante a criação do objeto.