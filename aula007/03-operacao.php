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
            $nota1 = 5;
            $nota2 = 2;
            $m = ($nota1+$nota2)/2;
            echo "A média entre $nota1 e $nota2 é $m <br> ";
            echo "A situação do aluno é " .$sit = ($m<6)? "REPROVADO" : "APROVADO" ;
            ?>
    </div>
        <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>



    
</body>
</html>