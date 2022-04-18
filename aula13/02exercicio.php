<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
</head>
    <body>
        <h2>Exibir a tabuada do número:</h2>

        <form method="post" action="02-tabuada.php">
            <select name="valor">
                <?php
                for($i = 1; $i <= 10; $i++){
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select> <br/>
            <input type="submit" value="Calcular (for)"/>
        </form>

    </body>
</html>