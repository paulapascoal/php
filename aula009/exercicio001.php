<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            $a = isset($_GET["ano"])? $_GET["ano"]:1900;
            $i = date ("Y") - $a;
            echo "Você nasceu em $a e tem $i anos";
        if($i >= 18){
            $v = "já pode votar.";
            $d = "já pode dirigir.";
        }
        else{
            $v = "não pode votar.";
            $d = "não pode dirigir.";
        }
        echo "<br> Com essa idade você $v e também $d."
         ?>
        
    </div>
    <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>

</body>
</html>