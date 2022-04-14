<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $preco = $_GET["p"];
        echo "O preço do produto é: R$ $preco";

        $desconto = 0.1;

        $preco -= ($preco * $desconto);

        echo "<br/>Valor com desconto é: R$ " . number_format($preco, 2);

        ?>
    </body>
</html>