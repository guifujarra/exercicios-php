<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício PHP</title>
</head>
    <body>
        <?php
            require 'utils.php';

            $number = empty($_POST["number"]) ? 1 : $_POST["number"];
            $times = empty($_POST["times"]) ? 1 : $_POST["times"];

            if($times < 1){
                echo "ERRO: Times não pode ser menor que 1!"; 
                return;
            }
            echo "Number é " . parOuImpar($number) . " e times é " . parOuImpar($times);

            if(isPar($number)){
                echo "<p>Multiplicação:</p>";

                for($i = 1; $i <= $times; $i++){
                    echo "$number x $i = " . ($number * $i) . "<br/>";

                }
            }else{
                echo "<p>Soma:</p>";

                for($i = $times; $i >= 0; $i--){
                    echo "$number + $i = " . ($number + $i) . "<br/>";

                }
            }
            echo "<p> Tabuada: </p> <pre>";
            print_r(tabuada($number));
            echo "</pre>";
        ?>
    </body>
</html>