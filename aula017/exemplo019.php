<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 19</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
        <?php
            $nome = "Guanabara";
            $novo = str_pad($nome,30," ", STR_PAD_RIGHT);
            print ("Meu professor $novo é lindo!");


            ?>
    </div>
    
</body>
</html>