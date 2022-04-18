<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <pre>
            <?php
                $vetor = array("X", "Z", "J", "L", "A", "D", "B");
                print_r($vetor);
                asort($vetor);
                print_r($vetor);
                ksort($vetor);
                print_r($vetor);
            ?>
        </pre>
    </body>
</html>