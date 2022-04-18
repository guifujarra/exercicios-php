<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <?php
        $tabuada = isset($_POST["valor"]) ? $_POST["valor"] : 1;

        echo "<h2>Tabuada do $tabuada</h2>";

        $i = 0;
        while($i <= 10){

            echo "$tabuada x $i = " . ($tabuada * $i) . "<br/>";
            $i++;
        }
        ?>
        <br/>
        <a href="03exercicio.php">Voltar</a>
    </body>
</html>