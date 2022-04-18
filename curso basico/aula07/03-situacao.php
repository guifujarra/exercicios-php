<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é $media";

        echo "<br/>Situação do aluno: " . ($media < 7 ? "Reprovado" : "Aprovado");
        ?>
    </body>
</html>