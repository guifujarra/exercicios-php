<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $ano = $_GET["an"];
        $idade = 2022 - $ano;
        echo "Quem nasceu em $ano tem $idade anos";

        $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
        echo "<br/>Seu voto é $tipo";
        ?>
    </body>
</html>