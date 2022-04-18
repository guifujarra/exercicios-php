<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
            $txt = "  Frase grande para ser utilizada na função  ";
            $novo = trim($txt);
            echo "Txt: " . strlen($txt);
            echo "<br/>";
            echo "Novo: " . strlen($novo);
        ?>
    </body>
</html>