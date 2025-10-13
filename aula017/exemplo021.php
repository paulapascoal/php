<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 21</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
        <?php
             $frase = "Gosto de estudar Matemática!!! Matemática é muito legal";
             $novaFrase = str_replace("Matemática","PHP", $frase);
             print ($novaFrase);


            ?>
    </div>
    
</body>
</html>