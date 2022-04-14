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
        if($idade < 16){
            $tipoVoto = "não vota";
        }else if($idade >= 16 && $idade < 18 || $idade > 65){
            $tipoVoto = "voto opcional";
        }else{
            $tipoVoto = "voto obrigatório";
        }
        

        echo "Para essa idade, $tipoVoto"
        ?>
        <br/>
        <a href="02exercicio.html">Voltar</a>
    </body>
</html>