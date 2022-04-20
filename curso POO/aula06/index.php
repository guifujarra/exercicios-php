<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 06 - POO</title>
</head>
    <body>
        <h1>Controle Remoto</h1>
        <?php
        require_once 'ControleRemoto.php';
        $c1 = new ControleRemoto();
        // $c1->ligar();
        $c1->play();
        $c1->maisVolume();
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->fecharMenu();
        ?>
    </body>
</html>