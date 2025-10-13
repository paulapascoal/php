<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 17</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
        <?php
            $frase ="Estou aprendendo PHP no Curso em Vídeo de PHP.";
            $cont = substr_count ($frase, "PHP");
            print ("PHP foi encontrado $cont vezes");


            ?>
    </div>
    
</body>
</html>