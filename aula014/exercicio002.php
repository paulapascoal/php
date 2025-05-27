<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            function soma ($a, $b){
                return $a + $b;
            }
            $x = -4;
            $y = 8;
            $r = soma($x, $y);
            echo "A soma entre $x e $y é igual a $r";


            ?>
    </div>
       <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>
</body>
</html>