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
        <?php
        function soma ($a, $b){
            $s = $a + $b;

            echo "<p>A soma vale $s</p>";
        }
        soma (3,4);
        soma (8,2);
        $x = 9 ;
        $y = 15;
        soma ($x, $y);


        ?>
    </div>

      <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>
    
</body>
</html>