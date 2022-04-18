<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <?php
        $estado = isset($_GET["reg"]) ? $_GET["reg"] : 0;
        switch($estado){
            case 1:
                $reg = "Região norte";
                break;
            case 2:
                $reg = "Região nordeste";
                break;
            case 3:
                $reg = "Região centro-oeste";
                break;
            case 4:
                $reg = "Região sudeste";
                break;
            case 5:
                $reg = "Região sul";
                break;
            default:
                $reg = "Região inválida";
        }
        echo "Você está na $reg"
    ?>
    <br/> <a href="03exercicio.html">Voltar</a>

    </body>
</html>