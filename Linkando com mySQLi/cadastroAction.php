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
     
     $conexao = new mysqli($servername, $username, $password, $bdname);

     if($conexao -> connect_error)
     {
        die("Connection failed: " . $conexao -> connect_error);
     }


     $sql = "insert into amigo(nome, apelido, email)
        values (
            '".$_POST['nome']."'    , 
            '".$_POST['apelido']."', 
            '".$_POST['email']."')";

     if ($conexao -> query($sql) === TRUE)
     {
        echo '
        <a href="index.php"> 
            <h1 class="container" > Cadastro de amigo salvo com sucesso! </h1>
        </a>';
     }
     else{
        echo 
        '
        <a href="index.php"> 
            <h1 class="container" > Houve um erro e o cadastro não foi realizado. </h1>
        </a>';
     }

     $conexao->close();

?>
</body>
</html>

