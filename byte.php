<?php 

require_once 'Valor.php';

class byte extends Valor{

    public function calcularbitsAbytes(){
        return $this->getValor() / 8;
    }

    public function calcularkilobytesAbytes(){
        return $this->getValor() * 1000;
    }

    public function calcularmegabytesAbytes(){
        return $this->getValor() *1e+6;
    }
    public function calculargigabytesAbytes(){
        return $this->getValor() *1e+9;
    } 

    public function calcularterabytesAbytes(){
        return $this->getValor() *1e+12;
    }



}

?>