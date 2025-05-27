<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form action="exercicio002b.php" method="get">
            <select name="num" id="num">
                <?php
                for ($c=1; $c <=10; $c++){
                    echo "<option>$c<option>";
                }

                ?>
            </select>
            <input type="submit" value="Tabuada">

        </form>
    </div>
     <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>

    
</body>
</html>