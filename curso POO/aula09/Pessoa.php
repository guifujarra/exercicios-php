<?php

class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function fazerAniver(){
        $this->idade += 1;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
}


?>