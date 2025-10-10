<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
        <?php
        $nome = "  José da Silva   ";
        echo (strlen($nome));
        $novo = rtrim ($nome);
        

        echo($novo);
        echo (strlen($novo));


            ?>
    </div>
    
</body>
</html>