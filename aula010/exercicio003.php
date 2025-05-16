<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicío 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
        $estado = isset ($_GET["estado"])? $_GET["estado"]:"";
        $regiao = '';

        switch ($estado){
            case 'ac':
            case 'am':
            case 'ap':       
            case 'pa':
            case 'ro':
            case 'rr':
            case 'to': 
               echo "Você mora na região Norte";            
            break;   

            case 'al':
            case 'ba':
            case 'ce':
            case 'ma':
            case 'pb':
            case 'pe':
            case 'pi':
            case 'rn':
            case 'se':
               echo "Você mora na região Nordeste";
              break;
            case 'df':
            case 'go':
            case 'mt':
            case 'ms':
                echo "Você mora na região Centro Oeste";
                break;
            case 'es':
            case 'mg':
            case 'sp':
            case 'rj':
                echo "Você mora na região Sudeste";   
             break;
             case 'pr':
             case 'rs':
             case 'sc':
               echo "Você mora na região Sul";   
             break;
             default:
              echo "Estado e região não encontrado";
              break;                
        }

       
        
        ?>
    </div>

    <br><a href="exercicio003.html">Voltar</a>
    
</body>
</html>