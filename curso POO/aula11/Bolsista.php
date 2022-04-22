<?php
require_once 'Aluno.php';

class Bolsista extends Aluno{
    private $bolsa;


    public function pagarMensalidade(){
        echo "<p>Bolsista {$this->getNome()} pagará com desconto.";    
    }

    public function renovarBolsa(){
        echo "<p>Bolsa renovada!</p>";
    }

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }
}