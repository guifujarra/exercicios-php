<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $primo = isset($_POST["numero"]) ? $_POST["numero"] : 2;

        $resultado = "É primo!";
        $qtdMultiplos = 2;
        $multiplos = "1";
        if($primo > 2 && $primo > 0){
            for($i = 2; $i < $primo; $i++){
                if($primo % $i == 0){
                    $resultado = "Não é primo!";
                    $multiplos .= ", $i";
                    $qtdMultiplos++;
                }
            }
        }else{
            $resultado = "Não é primo!";
        }
        $multiplos .= ", $primo";

        echo "O número $primo: $resultado";
        echo "<br/>Multiplos: $multiplos";
        echo "<br/>Quantidade multiplos: $qtdMultiplos";
        ?>
        <br/>
        <a href="03exercicio.html">Voltar</a>
    </body>
</html>