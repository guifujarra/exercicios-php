<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1990;
        $idade = date("Y") - $ano;

        echo "Você nasceu em $ano e tem $idade<br/>";
        if($idade >= 18){
            echo "Pode votar (obrigatório) e dirigir.";
        }else if($idade >= 16){
            echo "Pode votar (opcional), mas não pode dirigir.";
        }else{
            echo "Não pode votar e nem dirigir.";
        }

        ?>
        <br/>
        <a href="01exercicio.html">Voltar</a>
    </body>
</html>