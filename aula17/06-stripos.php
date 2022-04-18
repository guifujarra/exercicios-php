<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
            $frase = "Frase para ser realizada a busca.";
            $posicao = stripos($frase, "SER"); //Com ignore case
            echo "$frase <br/>Palavra na posição $posicao"
        ?>
    </body>
</html>