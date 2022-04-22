<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 14 - POO</title>
</head>
    <body>
        <?php
        require_once 'Video.php';
        require_once 'Gafanhoto.php';

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML 5");

        $p[0] = new Gafanhoto("Gui", "Guilherme", 20, "M");

        $p[0]->assistiuMaisUm();
        echo "<pre>";
        print_r($v);
        print_r($p);
        ?>
    </body>
</html>