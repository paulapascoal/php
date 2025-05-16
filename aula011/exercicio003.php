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
        <form method="get" action="exercicio004.php">
            <?php
            $c = 1;
            while ($c <= 5){
                echo "Valor $c: <input type='number' name='v$c' value='0' max='100' min='0'/><br/>";
                $c++;
            }
            ?>
            <input type="submit" value="Enviar" class="botao">
        </form>
    </div>
</body>
</html>
