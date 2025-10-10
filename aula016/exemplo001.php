<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
        <?php
        $prod = "leite";
        $preco = 4.5;

        printf ("O %s está custando R$ %.2f", $prod, $preco);

            ?>
    </div>
    
</body>
</html>