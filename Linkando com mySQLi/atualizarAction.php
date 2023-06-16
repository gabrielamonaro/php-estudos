<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $passoword = "usbw";
    $dbname = "pwii";

    $conexao = new mysqli($servername, $username, $passoword, $dbname);

    if($conexao -> connect_error)
    {
        die("Connection failed : " . $conexao->connect_error);
    }

    $sql = "update amigo set nome =  '".$_POST['nome']."', apelido =  '".$_POST['apelido']."', email =  '".$_POST['email']."' where codigo =  '".$_GET['id']."'";
    
    

    if ($conexao -> query($sql) === TRUE)
    {
       echo '
       <a href="index.php"> 
           <h1 class="container" > Cadastro de amigo salvo com sucesso! </h1>
       </a>';
    }
    else{
       echo $_POST['nome'] .
       '
       
       <a href="index.php"> 
           <h1 class="container" > Houve um erro e o cadastro não foi realizado. </h1>
       </a>';
    }

?>
</body>
</html>