<!DOCTYPE html>
<html>
    <head>
    <?php
       $texto = isset($_GET["t"]) ? $_GET["t"] : "Texto genérico";
       $tamanho = isset($_GET["tam"]) ? $_GET["tam"] : "14pt";
       $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000"
       ?>
        <meta charset="UTF-8"/>

        <style>
            span.texto{
                font-size: <?php echo $tamanho; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>
</head>
    <body>
        <?php
        echo "<span class='texto'>$texto</span>"

        ?>
       <br/>
       <a href="03exercicio.html">Voltar</a>
    </body>
</html>