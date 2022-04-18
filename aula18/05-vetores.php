<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
            $vetor = array("nome" => "Gui", "idade" => 20, "peso" => 70.5);
            foreach($vetor as $campo => $valor){
                echo "O campo $campo é $valor <br/>";
            }
        ?>
    </body>
</html>