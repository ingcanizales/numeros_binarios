<?php 

require_once 'Valor.php';

class terabyte extends Valor{

    public function calcularbitsAterabytes(){
        return $this->getValor() / 1.25e-13;
    }

    public function calcularkilobytesAterabytes(){
        return $this->getValor() / 1e+9;
    }

    public function calcularmegabytesAterabytes(){
        return $this->getValor() / 1e+6;
    }
    public function calculargigabytesAterabytes(){
        return $this->getValor() / 1000;
    } 

    public function calcularbytesAterabytes(){
        return $this->getValor() / 1e+12;
    }



}

?>