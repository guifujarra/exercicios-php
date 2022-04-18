<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $frase = "Frase para ser substituida usando str_replace";
        echo "$frase <br/>" . str_replace("usando", "utilizando", $frase);
        ?>
    </body>
</html>