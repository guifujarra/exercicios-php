<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Funções aritiméticas</title>
        <style>
            h2{
                font: 16pt Arial;
                color: #171559;
                font-weight: bold;
            }
        </style>
</head>
    <body>
        <?php
        $n1 = $_GET["x"];
        $n2 = $_GET["y"];

        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        echo "O valor absoluto de $n1 é: " . abs($n1);
        echo "<br/>O valor de $n1<sup>$n2</sup> é: " . pow($n1, $n2);
        echo "<br/>A raiz de $n1 é: " . sqrt($n1);
        echo "<br/>O valor arredondado de $n1 é: " . round($n1); //ceil e floor
        echo "<br/>A parte inteira de $n1 é: " . intval($n1);
        echo "<br/>O valor de $n1 em moeda é: " . number_format($n1, 2, ",", "."); 
        ?>
    </body>
</html>