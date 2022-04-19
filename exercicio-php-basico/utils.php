<?php
    function parOuImpar($valor){
        if(isPar($valor)){
            return "par";
        }
        return "ímpar";

    }

    function isPar($valor){
        if($valor % 2 == 0){
            return true;
        }
        return false;
    }

    function tabuada($valor){
        for($i = 0; $i <= 10; $i++){
            $array[] = $valor * $i; 
        }
        return $array;
    }
?>