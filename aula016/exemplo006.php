<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 6</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
        <?php
        $frase ="Eu vou estudar PHP agora";
        $cont = str_word_count ($frase, 1);
        print_r ($cont);


            ?>
    </div>
     <footer>
        <p>&copy; Curso em Vìdeo</p>
    </footer>
</body>
</html>