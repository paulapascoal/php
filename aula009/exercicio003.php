<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
           $n1 = isset ($_GET ["nota1"])? $_GET["nota1"]:0;
           $n2 = isset ($_GET ["nota2"])? $_GET["nota2"]: 0;
           $m = ($n1+$n2)/2;
           echo "Suas notas fora $n1 e $n2.<br>"
        if ($m >= 5 && $m < 7) {
            $media = "está de recuperação";
        } 
        else {
            $media = "aprovado";
        }
        echo "Com essas notas você foi $media.";
         ?>
        
    </div>
    <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>

</body>
</html>