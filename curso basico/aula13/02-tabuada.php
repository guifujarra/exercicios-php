<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $tabuada = isset($_POST["valor"]) ? $_POST["valor"] : 1;

        echo "<h2>Tabuada do $tabuada</h2>";

        for($i = 1; $i <= 10; $i++){
            echo "$tabuada x $i = " . ($tabuada * $i) . "<br/>";
        }
        ?>
        <br/>
        <a href="02exercicio.php">Voltar</a>
    </body>
</html>