<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
        <pre>
        <?php
           $v = array ("A", "J", "M", "X","K");
           print_r($v);
           //array_unshift($v, "O");
           array_shift($v);
           print_r($v);



            ?>
    </div>
    </pre>
     <footer>
        <p>&copy; Curso em Vìdeo</p>
    </footer>
</body>
</html>
