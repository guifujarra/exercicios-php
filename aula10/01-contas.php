<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $valor = isset($_GET["val"]) ? $_GET["val"] : 0;
        $operacao = isset($_GET["oper"]) ? $_GET["oper"] : 1;

        echo "Valor recebido: $valor";

        switch($operacao){
            case 1:
                $valor = $valor * 2;
                break;
            case 2:
                $valor = pow($valor, 3);
                break;
            default:
                $valor = sqrt($valor);
                break;
        }

        echo "<br/>Resultado: $valor"

        ?>
        <br/>
        <a href="01exercicio.html">Voltar</a>
    </body>
</html>