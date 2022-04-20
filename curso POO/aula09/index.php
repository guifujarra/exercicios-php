<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 09 - POO</title>
</head>
    <body>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';


            $pessoa[0] = new Pessoa("João", 20, "M");
            $pessoa[1] = new Pessoa("Maria", 22, "F");

            $livro[0] = new Livro("PHP Básico", "José", 300, $pessoa[0]);
            $livro[1] = new Livro("POO com PHP", "Maria Souza", 500, $pessoa[0]);
            $livro[2] = new Livro("PHP Avançado", "Ana", 800, $pessoa[1]);

            $livro[0]->abrir();
            $livro[0]->folhear(80);

            $livro[1]->abrir();
            $livro[1]->avancarPagina();

            $livro[2]->abrir();
            $livro[2]->folhear(900);

            $livro[0]->detalhes();
            $livro[1]->detalhes();
            $livro[2]->detalhes();
        ?>
    </body>
</html>