<?php

class Calculadora
{
    public $total;
    public function __construct(){
        $this->total = 0;
    }
    public function clear($x){
        $this->total = 0;
    }
    public function add($x1){
        return $this->total += $x1;
    }
    public function sub($x2){
        return $this->total -= $x2;
    }
    public function multiply($x3){
        return $this->total *= $x3;
    }
    public function divide($x4){
        return $this->total /= $x4;
    }
    public function total($x){
        return $this->total;
    }
}


$calc = new Calculadora();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);

echo "TOTAL: ".$calc->total($calc);
$calc->clear($calc);

?>