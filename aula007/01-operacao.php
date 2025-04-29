<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo</title>
    
</head>
<body>

    <?php
           
            $n1 = 5;
            $n2 = 3 ;
            $tipo = "s";

            echo "Os valores foram $n1 e $n2 <br>";

            $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;

            echo "O resultado será $r."


        ?>
    
</body>
</html>