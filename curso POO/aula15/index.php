<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 15 - POO</title>
</head>
    <body>
        <?php
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML 5");

        $g[0] = new Gafanhoto("Gui", "Guilherme", 20, "M");

        $vis[0] = new Visualizacao($g[0], $v[0]); // Guilherme assiste Aula 1 POO  
        $vis[1] = new Visualizacao($g[0], $v[2]); //Guilherme assiste Aula 12 PHP
        
        $vis[0]->avaliarPorcentagem(85);

        echo "<pre>";
        print_r($vis);
        ?>
    </body>
</html>