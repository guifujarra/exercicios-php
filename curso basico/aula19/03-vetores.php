<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <pre>
            <?php
                $vetor = array("A", "J", "M", "X", "K");
                print_r($vetor);
                array_shift($vetor);
                print_r($vetor);
            ?>
        </pre>
    </body>
</html>