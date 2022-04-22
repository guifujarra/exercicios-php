<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 11 - POO</title>
</head>
    <body>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            require_once 'Professor.php';
            require_once 'Tecnico.php';

            // $v1 = new Visitante();

            // $v1->setNome("Gustavo");
            // $v1->setIdade(33);
            // $v1->setSexo("M");

            // print_r($v1);

            $a1 = new Aluno();
            
            $a1->setNome("Pedro");
            $a1->setMatricula(111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();

            $b1 = new Bolsista();

            $b1->setMatricula(1112);
            $b1->setNome("Matheus");
            $b1->setBolsa(12.5);
            $b1->setCurso("ADM");
            $b1->setIdade(17);
            $b1->pagarMensalidade();

            $p1 = new Professor();
            $p1->setSalario(2900.00);

            $p1->receberAumento(500.50);

            $t1 = new Tecnico();
            $t1->setNome("João");

            $t1->praticar();

            
            echo "<pre>";
            print_r($a1);
            print_r($b1);
            print_r($p1);
            print_r($t1);
        ?>
    </body>
</html>