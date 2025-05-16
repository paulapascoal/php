<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritmeticas</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div>
        <?php
            $n1 = $_GET ["a"];
            $n2 = $_GET["b"];
            echo "<h2>Valores recebidos: $n1 e $n2</h2>";
            $m = ($n1 + $n2)/2 ;
        
                echo "A soma vale: " .($n1 + $n2);
                echo "<br> A subtração vale: " .($n1 - $n2);
                echo "<br> A multiplicação vale: " .($n1 * $n2);
                echo "<br> A divisão vale: " .($n1 / $n2);
                echo "<br> O módulo vale: " .($n1 % $n2); 
                echo "<br> A média vale $m"

        ?>
    </div>
    <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>
    
    
</body>
</html>