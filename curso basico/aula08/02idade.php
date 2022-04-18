<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
       <?php
       $nome = $_GET["nome"];
       $ano = $_GET["ano"];
       $sexo = $_GET["sexo"];

       $idade = date("Y") - $ano;

       echo "$nome é $sexo tem $idade anos.";
       ?>
       <br/>
       <a href="02exercicio.html">Voltar</a>
    </body>
</html>