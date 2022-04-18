<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
            $frase = "Frase para ser contada pelo word count.";
            // 0 = Conta as palavras
            // 1, 2 = Cria um vetor
            $contador = str_word_count($frase, 2);
            print_r($contador);
            //echo $contador;
        ?>
    </body>
</html>