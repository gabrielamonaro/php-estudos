
<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <title>Função com e sem retorno.</title>
</head>
<body>
<div>
    <h1>
    <?php 
    $valor = $_POST['txtValor'];
    $texto = '';

    function parImpar($valor)
    {
        if($valor %2 == 0)
        {
            return 'par';
        }
        else{
            return 'ímpar';
        }
    }
        
        echo "O número digitado é ".parImpar($valor);
    ?>
    </h1>
</div>
</body>
</html>