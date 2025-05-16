<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <?php
    
        if (isset($_GET["v"])) {
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O valor enviado foi $valor.<br>";
        echo "A raiz de $valor é igual a " . number_format($rq, 2) . ".";
                } else {
        echo "Nenhum valor foi enviado.";
        }
    
    
    ?>
</div>
<footer>
        <p> &copy; CursoemVídeo </p>
    </footer>

    
</body>
</html>