<?php

class Caneta{
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function Caneta($c, $m, $p){
        $this->cor = $c;
        $this->modelo = $m;
        $this->ponta = $p;
        $this->tampar();
    }

    public function tampar(){
        $this->tampada = true;
    }

    public function destampar(){
        $this->tampada = true;
    }


    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }

}



?>