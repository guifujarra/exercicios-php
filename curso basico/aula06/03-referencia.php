<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <?php
        $a = 3;
        $b = &$a;
        $b += 5;
        $a += $b;
        echo "A variável A vale $a";
        echo "<br/>A variável B vale $b"
        ?>
    </body>
</html>