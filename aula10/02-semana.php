<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $dia = isset($_GET["dia"]) ? $_GET["dia"] : 0;
        switch($dia){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Dia de útil!";
                break;
            case 7:
            case 8:
                echo "Não é um dia útil!";
                break;
            default:
                echo "Dia inválido!";
                break;

        }
        ?>
        <br/>
        <a href="02exercicio.html">Voltar</a>
    </body>
</html>