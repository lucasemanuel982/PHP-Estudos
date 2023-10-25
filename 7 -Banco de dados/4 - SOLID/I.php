I nterface Segregation Principle (Princípio da Segregação de Interfaces):
     As interfaces devem ser específicas para os clientes que as utilizam. Em vez de criar interfaces genéricas, é preferível ter várias interfaces especializadas. Isso evita que as classes implementem métodos desnecessários e reduz o acoplamento.


<?php

interface Aves {
    public function setLocation($lat, $lng);
    public function render();
}

interface AvesQueVoam extends Aves {
    public function setAltitude($alt);
}
    
class Papagaio implements AvesQueVoam {
    public function setlocation($lat, $lng) {}
    public function setAltitude($alt) {}
    public function render() {}
}
    
class Pinguim implements Aves {
    public function setLocation($lat, $lng) {}
    public function render() {}
}

function test (Aves $ave){
    $ave->render();
}
