<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 9</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
        <?php
         $vetor [0] = "Curso";
         $vetor [1] = "em";
         $vetor [2] = "Vídeo";
         $texto = implode ("*", $vetor);
         print ($texto);


            ?>
    </div>
     <footer>
        <p>&copy; Curso em Vìdeo</p>
    </footer>
</body>
</html>