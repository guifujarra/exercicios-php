<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $x = "abc";
        $$x = "def";

        echo "O conteúdo da varável X é $x";
        echo "<br/>A variável ABC criada recebeu o valor $abc"
        ?>
    </body>
</html>