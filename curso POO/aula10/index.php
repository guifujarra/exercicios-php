<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 10 - POO</title>
</head>
    <body>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Funcionario.php';
            require_once 'Professor.php';

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Cláudio");
            $p4->setNome("Fabiana");

            $p2->setCurso("Informática");
            $p3->setSalario(2500.75);
            $p4->setSetor("Estoque");

            $p3->receberAumento(550.30);
            $p4->mudarTrabalho();
            $p2->cancelarMatricula();

            echo "<pre>";
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
    </body>
</html>