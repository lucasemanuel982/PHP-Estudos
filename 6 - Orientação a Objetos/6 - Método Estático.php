<!-- Um método estático em PHP é um método que pertence à classe em si, e não a uma instância específica dessa classe. Isso significa que você pode acessar um método estático sem criar um objeto da classe. Os métodos estáticos são definidos usando a palavra-chave "static".

Para definir um método estático em PHP, você coloca a palavra-chave "static" antes da declaração do método. Aqui está um exemplo de como isso é feito: -->

<?php

class MinhaClasse {

    public static function metodoEstatico($x,$y) {
        return $x +$y;
        
    }
}

echo MinhaClasse::metodoEstatico(20,30);
// Não foi necessário criar um objeto para utilizar  método estático. 
// Não funciona só com função, mas funciona também com variável. 

?>