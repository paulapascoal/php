<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            $ano = $_GET ["an"];
            $idade = 2025 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos.<br>";
           $tipo = ($idade >=18 && $idade < 65)? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
            echo "E dessa forma seu voto é $tipo";
            ?>
    </div>
    <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>

</body>
</html>