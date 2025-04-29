<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e HTML</title>
</head>
<body>
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
    
</body>
</html>