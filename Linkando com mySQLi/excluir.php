<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<?php
       
       $servername = "localhost";
       $username = "root";
       $password = "usbw";
       $bdname = "pwii";

       $conexao = new mysqli ($servername, $username, $password, $bdname);

       if($conexao -> connect_error)
       {
           die("Connection failed: " . $conexao->connect_error);
       }
    
        $sql = "select * from amigo where codigo=" . $_GET['id'];

        $resultado = $conexao -> query ($sql);

        foreach($resultado as $registro)
        {
            // echo ;
        }

        
        if($resultado != null)
        {
            echo '
            <form action="exclusaoAction.php ?id=' . $registro['codigo'] . '" method="post" class="w-50 container d-flex flex-column">
            <label for="codigo">Código</label>
            <input class="form-control" type="text" name="codigo" value= " ' . $registro['codigo'] . ' " disabled>

            <label for="nome">Nome</label>
            <input class="form-control" type="text" name="nome"  value= " ' . $registro['nome'] . ' " disabled>

            <label for="apelido">Apelido</label>
            <input class="form-control" type="text" name="apelido"  value= " ' . $registro['apelido'] . ' " disabled>

            <label for="email">e-mail</label>
            <input class="form-control" type="text" name="email"  value= " ' . $registro['email'] . ' " disabled>

            <button class="btn btn-success mt-2">
                Confirmar exclusão
            </button>
        </form>

            ';
        }
?>


</body>
</html>