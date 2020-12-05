<?php 

require_once 'Valor.php';

class megabyte extends Valor{

    public function calcularbitsAmegabytes(){
        return $this->getValor() / 8e+6;
    }

    public function calcularkilobytesAmegabytes(){
        return $this->getValor() / 1000;
    }

    public function calculargigabytesAmegabytes(){
        return $this->getValor() *1000;
    }
    public function calcularbytesAmegabytes(){
        return $this->getValor() / 1e+6;
    } 

    public function calcularterabytesAmegabytes(){
        return $this->getValor() *1e+6;
    }



}

?>