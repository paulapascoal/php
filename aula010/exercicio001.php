<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
        <?php
            $n = isset($_GET["num"])? $_GET ["num"]: 0;
            $o = isset ($_GET ["oper"])? $_GET ["oper"]:1;
        
            switch ($o){
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n);
        
            }
            echo "O resultado da operação solicitado foi $r."
             ?>

             <br><a href="exercicio001.html" class="botao">Voltar</a>
    </div>
    
</body>
</html>