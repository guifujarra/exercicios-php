<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
            $txt = "Frase grande para ser utilizada na função";
            $resultado = wordwrap($txt, 3, "<br/>", false);
            echo "$resultado";
        ?>
    </body>
</html>