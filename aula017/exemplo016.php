<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 16</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
        <?php
        $frase = "Estou aprendendo PHP  <br>";
        $pos = strpos ($frase, "php");
        echo $frase; 
        echo "A string foi encontrada na posição $pos";


            ?>
    </div>
    
</body>
</html>