<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
        function soma (){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            
            for($i=0; $i < $t; $i++){
                $s +=  $p[$i];
            }
            return $s;
        }
        
            $r = soma (3,5,2,8,9,4);
            echo "A soma dos valores é $r";


            ?>

    </div>
       <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>
    
</body>
</html>