<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
        $txt = "Este é um exemplo de string gigante que...";
        $res = wordwrap ($txt, 5, "<br> \n", false );
        echo $res;


            ?>
    </div>
    
</body>
</html>