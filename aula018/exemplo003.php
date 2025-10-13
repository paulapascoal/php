<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
         
            <pre>
        <?php
            $v = array (1 => "A", 3=> "B", 6 => "C", 8=> "D");
            print_r($v);
            $v [] = "E";
            unset ($v [3]);


            ?>
            </pre>
    </div>
         <footer>
        <p>&copy; Curso em Vìdeo</p>
    </footer>
    
</body>
</html>
