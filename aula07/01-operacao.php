<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $a = $_GET["a"];
        $b = $_GET["b"];
        $b = 3;
        $operacao = $_GET["op"];
        $resultado;
        $resultado = $operacao == "s" ? $a+$b : $a*$b; 
        echo "Os valores passado foram $a e $b";
        echo "<br/>O resultado é $resultado";
        ?>
    </body>
</html>