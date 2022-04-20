<?php

    class Conta{

        private $numero;
        private $digito;
        private $tipo;
        private $nomeTitultar;
        private $saldo;
        private $aberta;

        public function __construct($numero, $digito, $tipo, $nomeTitular){
            $this->numero = $numero;
            $this->digito = $digito;
            $this->tipo = $tipo;
            $this->nomeTitular = $nomeTitular;
            $this->saldo = 0.00;
        }

        public function abrirConta(){
            $this->aberta = true;
            echo "<p>Conta de {$this->getNomeTitular()} foi aberta com sucesso!</p>";
        }

        public function fecharConta(){
            if($this->getSaldo() > 0){
                $this->aberta = false;
                echo "<p>Conta de {$this->getNomeTitular()} não pode ser fechada. Saldo maior que zero!</p>";
                return;
            }
            echo "<p>Conta de {$this->getNomeTitular()} foi fechada com sucesso!</p>";
        }

        public function isAberta(){
            return $this->aberta;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function sacar($quantia){
            if(!$this->isAberta()){
                echo "<p>Não é possível sacar da conta de {$this->getNomeTitular()}, pois ela está fechada!</p>";
                return;
            }
            if($this->saldo >= $quantia){
                $this->saldo -= $quantia;
                echo "<p>R$ $quantia foi sacada da conta do titular {$this->getNomeTitular()}!</p>";
            }
        }

        public function depositar($quantia){
            if(!$this->isAberta()){
                echo "<p>Não é possível depositar da conta de {$this->getNomeTitular()}, pois ela está fechada!</p>";
                return;
            }
            $this->saldo += $quantia;
            echo "<p>R$ $quantia foi depositada na conta do titular {$this->getNomeTitular()}!</p>";
        }

        public function getNumero(){
            return $this->numero;
        }

        public function getDigito(){
            return $this->digito;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getNomeTitular(){
            return $this->nomeTitular;
        }
    }
?>