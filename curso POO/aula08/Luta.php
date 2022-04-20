<?php

require_once 'Lutador.php';

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    function marcarLuta($desafiado, $desafiante, $rounds){
        if($desafiante->getCategoria() != $desafiado->getCategoria() || 
        $desafiante == $desafiado || 
        is_null($desafiante) || is_null($desafiado)){
            $this->aprovada = false;
            echo "A luta foi cancelada!";
            return;
        }
        $this->desafiado = $desafiado;
        $this->desafiante = $desafiante;
        $this->rounds = $rounds;
        $this->aprovada = true;
    }

    function lutar(){
        if(!$this->isAprovada()){
            echo "<br/>A luta não foi aprovada, portanto, não pode ser iniciada!";
            return;
        }
        $random = rand(1, 3);
        if($random == 1){
            $this->desafiante->ganharLuta();
            echo "{$this->desafiante->getNome()} Venceu a luta!";
            return;
        }else if($random == 2){
            $this->desafiado->ganharLuta();
            echo "{$this->desafiado->getNome()} Venceu a luta!";
            return;
        }
        $this->desafiante->empatarLuta();
        $this->desafiado->empatarLuta();
        echo "Empate!";
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

    public function isAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
}

?>