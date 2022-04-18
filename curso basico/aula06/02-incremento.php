<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        /* Exercício sobre o uso de operadores de 
        incremento e decremento
        */
        $atual = $_GET["aa"]; //Ano na URL
        echo "O ano atual é $atual e o ano anterior é " . --$atual;
        ?>
    </body>
</html>