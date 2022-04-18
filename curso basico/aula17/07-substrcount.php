<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
            $frase = "Frase para ser realizada a busca.";
            $contagem = substr_count($frase, "s");
            echo "A letra s foi encontrada $contagem vezes"
        ?>
    </body>
</html>