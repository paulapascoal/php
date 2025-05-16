<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"] : "[Não Informado]";
            $ano = isset($_GET["ano"])?$_GET["ano"] : "0" ;
            $sexo = isset($_GET["sexo"])?$_GET["sexo"] : "[Não Informado]";
            $idade = date("Y") - $ano;
            echo "$nome é $sexo tem $idade anos";
            ?>
            <a href="02-exercicio.html">Voltar</a>
    </div>
    
        <footer>
        <p> &copy; CursoemVídeo </p>
    </footer>

</body>
</html>