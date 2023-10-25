<!-- As interfaces são usadas para estabelecer um contrato/guia de implementaçã entre as classes, garantindo que elas tenham os métodos necessários implementados. -->

<?php

interface Imprimivel {
    public function resultado();
}



class Pessoa3 implements Imprimivel {
    protected static $contador = 0;
    protected $id;
    protected $likes;

    public function __construct($likes) {
        $this->id = self::$contador;
        $this->likes = $likes;
        self::$contador++;
    }

    protected function getId() {
        return $this->id;
    }

    protected function getLikes() {
        return $this->likes;
    }

    protected function setId($i) {
        $this->id = $i;
    }

    protected function setLikes($n) {
        $this->likes = $n;
    }

    public function accessId() {
        return $this->getId();
    }

    public function accessLikes() {
        return $this->getLikes();
    }

    public static function getContador() {
        return self::$contador;
    }

    // Criando Função para retornar a quantidade do contador. 
    public function Resultado() {
        echo "Total de objetos criados: " . self::getContador();
    }
}

class Foto4 extends Pessoa3 {
    private $url;

    public function __construct($likes, $url) {
        parent::__construct($likes);
        $this->url = $url;
    }

    public function setUrl($u) {
        $this->url = $u;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getInfo() {
        echo "ID: " . $this->accessId() . ", Likes: " . $this->accessLikes() . ", URL: " . $this->getUrl(). "<br>";
    }
    


}

$foto1 = new Foto4(20, 'www.lucas.com.br');
$foto1->getInfo() . "<br>"; ;; // Chama o método getInfo() da classe Foto4 


$foto2 = new Foto4(15, 'www.joao.com.br');
$foto2->getInfo() . "<br>";  // Chama o método getInfo() da classe Foto4 

$pessoa = new Pessoa3(0);
$pessoa->Resultado(); // Chama o método resultado() da interface Imprimivel

?>