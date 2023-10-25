<!-- O polimorfismo em PHP é um conceito orientado a objetos que permite que objetos de classes diferentes possam ser tratados de maneira uniforme por meio de uma interface comum. Isso significa que você pode usar um objeto de uma classe filha em vez de um objeto de sua classe pai, desde que a classe filha herde da classe pai ou implemente uma interface comum. 

São dois tipos de Polimorfismo
Polimorfismo por herança - Onde a classe filha herdará a função da classe mãe
Polimorfismo por Interface - Onde a classe irá extender a interface e irá pegar a função.
-->

<?php 

interface Imprimivel1 {
    public function imprimir();
}

class Pessoa5 implements Imprimivel1 {
    protected static $contador = 0;
    protected $id;
    protected $likes;

    public function __construct($likes) {
        $this->id = self::$contador;
        $this->likes = $likes;
        self::$contador++;
    }
    public function setId($a){
        $this->id = $a;
    }
    
    public function getId(){
        return $this->id;
        
    }


    public function setLikes($l){
        $this->likes = $l;
    }
    
    public function getLikes(){
        return $this->likes;
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

    // Resto do código da classe

    public function imprimir() {
        echo "Total de objetos criados: " . self::getContador();
    }
}

class Foto4 extends Pessoa5 {
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

    public function imprimir() {
        $this->getInfo();
    }
}

// Criando instâncias de Foto4 e Pessoa5
$foto1 = new Foto4(20, 'www.lucas.com.br');
$pessoa1 = new Pessoa5(0);

// Chamar o método imprimir() para ambos os objetos. ou seja, métodos com mesmo nome. Porém, com funções diferentes. 
$foto1->imprimir(); //Irá conter as informações do ID, likes e URl
$pessoa1->imprimir(); //Irá informar a quantidades de objetos criados. 
