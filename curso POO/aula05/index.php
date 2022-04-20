<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aula 05 - POO</title>
</head>
    <body>
        <?php
        require 'Conta.php';

        $conta = new Conta("0820304", "9", "CC", "Guilherme");
        $conta2 = new Conta("014205", "2", "CP", "João");

        $conta->abrirConta();
        $conta->depositar(379.45);
        $conta->sacar(200.12);
        $conta->fecharConta();

        ?>
    </body>
</html>