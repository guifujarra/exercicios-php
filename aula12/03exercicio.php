<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <h2>Exibir a tabuada do número:</h2>

        <form method="post" action="03-tabuada.php">
            <select name="valor">
                <?php
                $i = 1;
                while($i <= 10){
                    echo "<option value='$i'>$i</option>";
                    $i++;
                }
                ?>
            </select> <br/>
            <input type="submit" value="Calcular"/>
        </form>

    </body>
</html>