<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        function soma($a, $b){
            $s = $a + $b;
            echo "<p>Soma: $s</p>";
        }
        soma(4, 8);
        soma(5, 9);
        soma(10.3, 32.2);
        $x = 10;
        $y = 20;
        soma($x, $y);
        ?>
    </body>
</html>