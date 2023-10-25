<!-- A herança em PHP é definida usando a palavra-chave extends. Ao criar uma nova classe, você pode especificar qual classe pai ela deve herdar. A classe filha terá acesso a todas as propriedades e métodos públicos ou protegidos da classe pai.Ou seja, serve para se reaproveitado códigos. -->

<?php
class Pessoa {
    protected $id;
    protected $likes;
  
    public function __construct($id, $likes) {
      $this->id = $id;
      $this->likes = $likes;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getLikes() {
      return $this->likes;
    }

    public function setId($i) {
      $this->id = $i;
    }
  
    public function setLikes($n) {
      $this->likes = $n;
    }
  }
  
  class Foto extends Pessoa {
    private $url;
  
    public function __construct($id, $likes, $url) {
      //  O construtor da classe Foto chama o construtor da classe Pessoa usando parent::__construct() para garantir que as propriedades herdadas sejam inicializadas corretamente.
    //   Fazendo deste modo poupa tempo e código, mas desta forma na hora de criar o objeto tem que ser passado os 3 parâmetros necessários
      parent::__construct($id, $likes);

      //  Também pode ser feito sem chamar o condtrutor da classe mãe. Fazendo direto. 
    //   $this->setId($id);
      $this->url = $url;
    }

    public function setUrl($u){
        $this->url=$u;
    }
    public function getUrl(){
        return $this->url;
    }
  }
  
  $foto =new Foto(1,20,'www.lucas.com.br');
//   $foto -> setLikes(12);
//   $foto -> setUrl('ABC');

  echo "Foto ID - ".$foto->getId()."</br>Likes - ".$foto->getLikes()."</br>Limk: - ".$foto->getUrl();






//   Outro código com o contador automático do ID

class Pessoa1 {
    protected static $contador = 0;
    protected $id;
    protected $likes;

    public function __construct($likes) {
        self::$contador++;
        $this->id = self::$contador;
        $this->likes = $likes;
    }

    public function getId() {
        return $this->id;
    }

    public function getLikes() {
        return $this->likes;
    }

    public function setId($i) {
        $this->id = $i;
    }

    public function setLikes($n) {
        $this->likes = $n;
    }
}

class Foto2 extends Pessoa1 {
    private $url;

    public function __construct($likes, $url) {
        parent::__construct($likes);
        $this->url = $url;
    }

    public function setUrl($u){
        $this->url = $u;
    }

    public function getUrl(){
        return $this->url;
    }
}

$foto1 = new Foto2(20, 'www.lucas.com.br');
$foto2 = new Foto2(15, 'www.joao.com.br');

echo "<br> Foto 1 - ID: " . $foto1->getId() . ", Likes: " . $foto1->getLikes() . ", URL: " . $foto1->getUrl() . "<br>";
echo "Foto 2 - ID: " . $foto2->getId() . ", Likes: " . $foto2->getLikes() . ", URL: " . $foto2->getUrl() . "<br>";



class Pessoa2 {
    protected static $contador = 0;
    protected $id;
    protected $likes;

    public function __construct($likes) {
        $this->id = self::$contador;
        $this->likes = $likes;
        self::$contador++;
    }

    public function getId() {
        return $this->id;
    }

    public function getLikes() {
        return $this->likes;
    }

    public function setId($i) {
        $this->id = $i;
    }

    public function setLikes($n) {
        $this->likes = $n;
    }
}

class Foto3 extends Pessoa2 {
    private $url;

    public function __construct($likes, $url) {
        parent::__construct($likes);
        $this->url = $url;
    }

    public function setUrl($u){
        $this->url = $u;
    }

    public function getUrl(){
        return $this->url;
    }
}

$foto1 = new Foto3(20, 'www.lucas.com.br');
$foto2 = new Foto3(15, 'www.joao.com.br');

echo "<br>Foto 1 - ID: " . $foto1->getId() . ", Likes: " . $foto1->getLikes() . ", URL: " . $foto1->getUrl() . "<br>";
echo "Foto 2 - ID: " . $foto2->getId() . ", Likes: " . $foto2->getLikes() . ", URL: " . $foto2->getUrl() . "<br>";




















class Pessoa3 {
    protected static $contador = 0;
    protected $id;
    protected $likes;

    // Como os métodos são protegidos tive que criar um método publico chamndos as funções protected
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
}

class Foto4 extends Pessoa3 {
    private $url;
    
    // Como os métodos são protegidos tive que criar um método publico chamndos as funções protected
    public function __construct($likes, $url) {
        parent::__construct($likes);
        $this->url = $url;
    }

    public function setUrl($u){
        $this->url = $u;
    }
    
    public function getUrl(){
        return $this->url;
    }
    
    public function accessId() {
        return $this->getId();
    }

    public function accessLikes() {
        return $this->getLikes();
    }
}

$foto1 = new Foto4(20, 'www.lucas.com.br');
$foto2 = new Foto4(15, 'www.joao.com.br');

echo "<br>Foto 1 - ID: " . $foto1->accessId() . ", Likes: " . $foto1->accessLikes() . ", URL: " . $foto1->getUrl() . "<br>";
echo "Foto 2 - ID: " . $foto2->accessId() . ", Likes: " . $foto2->accessLikes() . ", URL: " . $foto2->getUrl() . "<br>";

