<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 12 - POO</title>
</head>
    <body>
        <?php
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';

        $m = new Mamifero();
        $a = new Ave();
        $r = new Reptil();
        $p = new Peixe();
        $can = new Canguru();
        $c = new Cachorro();
        $t = new Tartaruga();

        $m->setPeso(33.5);
        $m->locomover();
        $can->locomover();
        $c->locomover();
        $c->emitirSom();
        $t->locomover();

        


        ?>
    </body>
</html>