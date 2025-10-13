<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
         
            <pre>
        <?php
            $cad = array ("Nome" => "Ana", "Idade" => 23, "Peso" => 78.5);
            //print_r ($cad);
           // $cad ["fuma"] = true;
           foreach ($cad as $campo => $res){
            echo "O campo de $campo é $res <br>";
           }


            ?>
            </pre>
    </div>
        
    
</body>
</html>
