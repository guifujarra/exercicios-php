<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador{

    private $volume;
    private $ligado;
    private $tocando;

    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    public function ligar(){
        $this->setLigado(true);
    }

    public function desligar(){
        $this->setLigado(false);
    }

    public function abrirMenu(){
        echo "-- MENU --";
        echo "<br/>Status: " . ($this->isLigado() ? "Ligado" : "Desligado");
        echo "<br/>Tocando: " . ($this->isTocando() ? "SIM" : "NÃO");
        echo "<br/>Volume: " . $this->getVolume();

        for($i = 0; $i <= $this->getVolume(); $i += 10){
            echo " | ";
        }
        echo "<br/>";

    }

    public function fecharMenu(){
        echo "<br/>Fechando menu...";
    }

    public function maisVolume(){
        if($this->isLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
        echo "<p>ERRO! Não foi possível aumentar o volume</p>";
    }

    public function menosVolume(){
        if($this->isLigado() && $this->getVolume() > 0){
            $this->setVolume($this->getVolume() - 5);
        }
        echo "<p>ERRO! Não foi possível diminuir o volume</p>";
    }

    public function ligarMudo(){
        if($this->isLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo(){
        if($this->isLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }

    public function play(){
        if($this->isLigado() && !$this->isTocando()){
            $this->setTocando(true);
        }
    }

    public function pause(){
        if($this->isLigado() && $this->isTocando()){
            $this->setTocando(false);
        }
    }

    private function getVolume(){
        return $this->volume;
    }

    private function setVolume($volume){
        $this->volume = $volume;
    }

    private function isLigado(){
        return $this->ligado;
    }

    private function setLigado($ligado){
        $this->ligado = $ligado;
    }

    private function isTocando(){
        return $this->tocando;
    }

    private function setTocando($tocando){
        $this->tocando = $tocando;
    }
}

?>