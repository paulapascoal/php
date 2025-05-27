<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="stylesheet" href="style.css">
        <style>
        h2{
                font: normal 16pt Arial;
                text-align:center;
                font-weight:bold ;
            }
    </style>
</head>
<body>
    <div>
        <?php
       $tab=isset($_GET["tab"])?$_GET["tab"]:1;
        $c=1;
        echo "<h2> A tabuada de $tab é: <br> </h2> ";
        do{
            echo "$tab x $c = ".($tab*$c)."</br>";
            $c++;
        }while ($c<=10);


        ?>
        <a href="exercicio004.html" class="botao">Voltar</a>
    </div>
           <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>
    
</body>
</html>