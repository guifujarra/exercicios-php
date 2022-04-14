<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
    <form method="get" action="02-formularios.php">
        <?php
        $c = 1;
        while($c <= 5){
            echo "Valor $c: <input type='number' name='val$c' id='val$c'> <br/>";
            $c++;
        }
        ?>
        <input type="submit" value="Enviar" class="botao"/>
    </form>

    </body>
</html>