<?php
require_once 'Pessoa.php';

class Gafanhoto extends Pessoa{

    private $login;
    private $totalAssistido;

    public function __construct($login, $nome, $idade, $sexo){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totalAssistido = 0;
    }

    public function assistiuMaisUm(){
        $this->totalAssistido++;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getTotalAssistido()
    {
        return $this->totalAssistido;
    }

    public function setTotalAssistido($totalAssistido)
    {
        $this->totalAssistido = $totalAssistido;
    }
}

?>