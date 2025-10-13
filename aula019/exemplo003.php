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
           $n = array (3,5,8,2);
           sort($n);
           print_r($n);

           $v = array (3,5,8,2);
           rsort($v);
           print_r($v);

           $p = array (3,5,8,2);
           asort($p);
           print_r($p);

           $r = array (3,5,8,2);
           arsort($r);
           print_r($r);



            ?>
    </div>
    </pre>
     <footer>
        <p>&copy; Curso em Vìdeo</p>
    </footer>
</body>
</html>
