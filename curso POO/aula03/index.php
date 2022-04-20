<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 03 - POO</title>
</head>
    <body>
        <?php
        require_once 'Caneta.php';

        $c1 = new Caneta();

        $c1->modelo = "Bic Cristal";
        $c1->cor = "Azul";  
        $c1->tampar();

        print_r($c1);
        ?>
    </body>
</html>