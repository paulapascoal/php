<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1{
                font: normal 16pt Arial;
                text-align:center;
                font-weight:bold ;
            }
    </style>
</head>
<body>
    <div>
        <?php
        $v = isset($_GET["val"])? $_GET["val"]:1;
        $fat= 1;
        echo "<h1> Calculando o Fatorial de $v </h1>";
        $c = $v;
        do{
            $fat = $fat * $c;
            $c--;


        } while($c >=1);
        echo "<h2> $v! = $fat </h2>";

        ?>
        <p><a href="exercicio003.html" class="botao" >Voltar</a></p>
    </div>
         <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>
    
</body>
</html>