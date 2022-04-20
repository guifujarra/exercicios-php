<?php

require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao{

    private $titulo;
    private $autor;
    private $totalPaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totalPaginas, $leitor){
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->paginaAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;

    }


    public function abrir(){
        $this->aberto = true;
    }

    public function fechar(){
        $this->aberto = false;

    }
    public function folhear($pagina){
        if($pagina > $this->totalPaginas){
            return;
        }
        $this->paginaAtual = $pagina;
    }

    public function avancarPagina(){
        $this->paginaAtual++;
    }

    public function voltarPagin(){
        $this->paginaAtual--;
    }

    function detalhes(){
        echo "<hr/>Livro {$this->getTitulo()} foi escrito por {$this->getAutor()}";
        echo "<br/>Páginas: {$this->getTotalPaginas()} atual {$this->getPaginaAtual()}";
        echo "<br/>Sendo lido por: {$this->leitor->getNome()}";
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getTotalPaginas()
    {
        return $this->totalPaginas;
    }

    public function setTotalPaginas($totalPaginas)
    {
        $this->totalPaginas = $totalPaginas;
    }

    public function getPaginaAtual()
    {
        return $this->paginaAtual;
    }

    public function setPaginaAtual($paginaAtual)
    {
        $this->paginaAtual = $paginaAtual;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }
}

?>