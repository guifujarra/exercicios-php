<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 07 - POO</title>
</head>
    <body>
        <?php
        require_once 'Lutador.php';

        $lutador[0] = new Lutador("ghz", "França", 30, 1.75, 90.9, 11, 2, 1);
        $lutador[1] = new Lutador("mpw", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $lutador[2] = new Lutador("xwz", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $lutador[3] = new Lutador("klp", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        $lutador[4] = new Lutador("nve", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $lutador[5] = new Lutador("xpto", "EUA", 30, 1.81, 105.7, 12, 2, 4);
        
        $lutador[1]->apresentar();
        $lutador[2]->perderLuta();
        $lutador[2]->setPeso(30.2);
        $lutador[2]->apresentar();

        ?>
    </body>
</html>