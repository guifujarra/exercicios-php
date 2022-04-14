<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
       <?php
       $valor = $_GET["v"];

       echo "O valor enviado foi $valor";
       echo "<br/>Sua raiz quadrada é " . number_format(sqrt($valor), 2);
       ?>
       <br/>
       <a href="01exercicio.html">Voltar</a>
    </body>
</html>