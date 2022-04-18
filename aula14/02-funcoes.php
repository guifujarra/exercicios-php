<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        function soma($a, $b){
            return $a + $b;
        }
        $soma = soma(2, 3);
        echo "Soma: $soma";

        $x = 10;
        $y = 20;

        echo "<br/>Segunda soma: " . soma($x, $y);
        ?>
    </body>
</html>