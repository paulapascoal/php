<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
        $d = isset ($_GET["ds"])? $_GET ["ds"]:0;

        switch($d){
            case 2: 
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar! :) ";    
                break;       
            case 7:
            case 8:
                echo "Descanse, pequeno ganhafoto ;) " ;
                break;
            default:
            echo "Dia da semana inválido.";       
        }



        ?>
    </div>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    
</body>
</html>