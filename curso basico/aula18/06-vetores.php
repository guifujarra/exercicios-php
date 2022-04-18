<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <pre>
            <?php
                $matriz = array(array(2, 3), array(3, 4), array(9, 5));
                print_r($matriz);
                $matriz[1] [0] = 2;
                print_r($matriz);
            ?>
        </pre>
    </body>
</html>