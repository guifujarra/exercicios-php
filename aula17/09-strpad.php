<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $nome = "Guilherme";
        $novo = str_pad($nome, 30, "--", STR_PAD_BOTH);
        echo $novo ;
        ?>
    </body>
</html>