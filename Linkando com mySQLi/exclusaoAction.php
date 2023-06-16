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
       echo $_GET['id'];
       $servername = "localhost";
       $username = "root";
       $password = "usbw";
       $bdname = "pwii";

       $conexao = new mysqli ($servername, $username, $password, $bdname);

       if($conexao -> connect_error)
       {
           die("Connection failed: " . $conexao->connect_error);
       }
    
        $sql = "delete from amigo where codigo=" . $_GET['id'];

        $resultado = $conexao -> query ($sql);

?>


</body>
</html>