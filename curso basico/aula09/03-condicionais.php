<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $n1 = isset($_GET["n1"])? $_GET["n1"] : 0;
        $n2 = isset($_GET["n2"])? $_GET["n2"] : 0;

        $media = ($n1 + $n2) / 2;

        if($media >= 7){
            $situacao = "APROVADO";
        }else if($media >= 5 && $media < 7){
            $situacao = "EM RECUPERAÇÃO";
        }else{
            $situacao = "REPROVADO";
        }

        echo "A média do aluno é: $media";
        echo "<br/>Situação aluno: $situacao";

        ?>
        <br/>
        <a href="03exercicio.html">Voltar</a>
    </body>
</html>