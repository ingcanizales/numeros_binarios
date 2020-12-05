<?php 

require_once 'Valor.php';

class kilobyte extends Valor{

    public function calcularbitsAkilobytes(){
        return $this->getValor() / 8000;
    }

    public function calcularbytesAkilobytes(){
        return $this->getValor() / 1000;
    }

    public function calcularmegabytesAkilobytes(){
        return $this->getValor()  *1000;
    }
    public function calculargigabytesAkilobytes(){
        return $this->getValor() * 1e+6;
    } 

    public function calcularterabytesAkilobytes(){
        return $this->getValor() *1e+9;
    }



}

?>