<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
        <?php
        $preco = 1000;
        echo "O preço do produto é R$: " .number_format($preco, 2);
        $preco += $preco*10/100;
        echo "<br> E o novo preço com 10% de aumento será de R$ " .number_format($preco,);
        ?>
    </div>
       <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>
    
</body>
</html>