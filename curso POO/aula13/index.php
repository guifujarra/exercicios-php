<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 13 - POO</title>
</head>
    <body>
        <?php
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        
        $m = new Mamifero();
        $l = new Lobo();
        $c = new Cachorro();


        $m->emitirSom();
        $l->emitirSom();
        $c->emitirSom();

        $c->reagirFrase("Ola");
        $c->reagirHora(21, 15);
        $c->reagirIdade(4, 1);
        $c->reagirDono(true);
        $c->reagirDono(false);

        ?>
    </body>
</html>