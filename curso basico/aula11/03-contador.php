<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <?php
        $valorInicial = isset($_GET["vi"]) ? $_GET["vi"] : 0;
        $valorFinal = isset($_GET["vf"]) ? $_GET["vf"] : 0;
        $incremento = isset($_GET["inc"]) ? $_GET["inc"] : 1;
        
        if($valorInicial < $valorFinal){
            while($valorInicial <= $valorFinal){
                echo $valorInicial . " ";
                $valorInicial += $incremento;
            }
        }else{
            while($valorInicial >= $valorFinal){
                echo $valorInicial . " ";
                $valorInicial -= $incremento;
            }
        }

        ?>
    </body>
</html>