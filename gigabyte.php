<?php 

require_once 'Valor.php';

class gigabyte extends Valor{

    public function calcularbitsAgigabytes(){
        return $this->getValor() / 8e+9;
    }

    public function calcularkilobytesAgigabytes(){
        return $this->getValor() / 1e+6 ;
    }

    public function calcularbytesAgigabytes(){
        return $this->getValor() / 1e+9;
    }
    public function calcularmegabytesAgigabytes(){
        return $this->getValor() / 1000;
    } 

    public function calcularterabytesAgigabytes(){
        return $this->getValor() *1000;
    }



}

?>