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
            <table class="table"><tr>
        <?php
           $c = range(5,20,2);
          //print_r($c)
          foreach ($c as $valor){
            echo "$valor ";
          }



            ?>
            </tr></table></pre>
    </div>
        
    
</body>
</html>
