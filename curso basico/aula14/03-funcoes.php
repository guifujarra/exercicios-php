<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        function soma(){
            $params = func_get_args();
            $p = func_num_args();

            $soma = 0;

            for($i = 0; $i <= $p; $i++){
                $soma += $params[$i];
            }
            return $soma;
        }
        $soma = soma(2, 3, 3, 2, 1, 5, 10, 32);
        echo "Soma: $soma";

        $x = 10;
        $y = 20;

        echo "<br/>Segunda soma: " . soma($x, $y, 10, 20, 30);
        ?>
    </body>
</html>