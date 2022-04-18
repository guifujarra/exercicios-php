<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <?php
        $fator = isset($_POST["fatorial"]) ? $_POST["fatorial"] : 2;
        if($fator < 1){
            $fator = 1;
        }
        echo "Valor recebido: $fator <br/>";

        $i = $fator - 1;
        while($i >= 1){
            $fator *= $i;
            $i--;
        }

        echo "Resultado: $fator";



        ?>
        <br/>
        <a href="02exercicio.html">Voltar</a>
    </body>
</html>