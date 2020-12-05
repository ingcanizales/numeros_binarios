<?php 

require_once 'Valor.php';

class bit extends Valor{

    public function calcularbytesAbits(){
        return $this->getValor() * 8;
    }

    public function calcularkilobytesAbits(){
        return $this->getValor() * 8000;
    }

    public function calcularmegabytesAbits(){
        return $this->getValor() * 8e+6;
    }
    public function calculargigabytesAbits(){
        return $this->getValor() * 8e+9;
    } 

    public function calcularterabytesAbits(){
        return $this->getValor() * 8.796+12;
    }



}

?>