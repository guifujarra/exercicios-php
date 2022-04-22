<?php
require_once 'Aluno.php';

class Tecnico extends Aluno{
    private $registroProfissional;

    public function praticar(){
        echo "<br/> Aluno técnico {$this->getNome()} está praticando";
    }

    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registroProfissional)
    {
        $this->registroProfissional = $registroProfissional;
    }
}
?>