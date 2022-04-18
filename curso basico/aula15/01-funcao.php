<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
            function somar(&$a){
                $a +=2;
                echo "<br/>Imprimindo a da função somar: $a";
            }

            $valor = 10;
            echo "Imprimindo valor antes da função: $valor";
            somar($valor);
            echo "<br/>Imprimindo valor depois da função: $valor"

        ?>
    </body>
</html>