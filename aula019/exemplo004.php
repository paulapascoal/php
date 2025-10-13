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
            $v = array (2 => "A", 5=> "J", 0=> "M", 3=>"X", 4 =>"K");
            print_r($v);

             $v = array (2 => "A", 5=> "J", 0=> "M", 3=>"X", 4 =>"K");
             ksort($v);
             print_r($v);

             $v = array (2=> "A", 5=> "J", 0=> "M", 3 => "X", 4 =>"K");
             krsort($v);
             print_r($v);



            ?>
    </div>
    </pre>
     <footer>
        <p>&copy; Curso em Vìdeo</p>
    </footer>
</body>
</html>
