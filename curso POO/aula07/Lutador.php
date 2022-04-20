<?php
class Lutador{

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function __construct($nome, $nacionalidade, $idade, $altura, $peso, 
                         $vitorias, $derrotas, $empates){
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->setPeso($peso);
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
                    

    }


    function apresentar(){
        echo "<br/>--- Apresentação ----";
        echo "<br/>Nome: {$this->getNome()}";
        echo "<br/>Nacionalidade: {$this->getNacionalidade()}";
        echo "<br/>Idade: {$this->getIdade()} anos";
        echo "<br/>Altura: {$this->getAltura()} metros de altura";
        echo "<br/>Peso: {$this->getPeso()}kg";
        echo "<br/>Categoria: {$this->getCategoria()}";
        echo "<br/>Vitórias: {$this->getVitorias()}";
        echo "<br/>Derrotas: {$this->getDerrotas()}";
        echo "<br/>Empates: {$this->getEmpates()}";

    }

    function status(){
        echo "<br/>--- Status ----";
        echo "<br/>{$this->getNome()} tem {$this->getIdade()} anos, ";
        echo "possui {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas ";
        echo "e {$this->getEmpates()} empates";

    }

    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);

    }

    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);

    }

    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
        
    }

    private function getNome()
    {
        return $this->nome;
    }

    private function setNome($nome)
    {
        $this->nome = $nome;
    }

    private function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    private function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    private function getIdade()
    {
        return $this->idade;
    }

    private function setIdade($idade)
    {
        $this->idade = $idade;
    }

    private function getAltura()
    {
        return $this->altura;
    }

    private function setAltura($altura)
    {
        $this->altura = $altura;
    }

    private function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria()
    {
        if($this->peso < 52.2){
            $this->categoria = "Inválido";
        }else if($this->peso <= 70.3){
            $this->categoria = "Leve";
        }else if($this->peso <= 83.9){
            $this->categoria = "Médio";
        }else if($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }

    private function getVitorias()
    {
        return $this->vitorias;
    }

    private function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    private function getDerrotas()
    {
        return $this->derrotas;
    }


    private function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    private function getEmpates()
    {
        return $this->empates;
    }

    private function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }
}

?>