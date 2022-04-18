<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <pre>
            <?php
                $vetor = array(1 => "A", 4 => "B", 32 => "C");
                $vetor[] = "D";
                unset($vetor[4]);
                print_r($vetor);
            ?>
        </pre>
    </body>
</html>