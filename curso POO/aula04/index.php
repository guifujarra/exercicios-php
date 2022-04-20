<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 04 - POO</title>
</head>
    <body>
        <?php
        require_once 'Caneta.php';

        $c1 = new Caneta("Azul", "BIC", 0.5);
        $c2 = new Caneta("Verde", "BRL", 1.0);

        print_r($c1);
        print_r($c2);
        ?>
    </body>
</html>