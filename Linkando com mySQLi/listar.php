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
        $password = "usbw";
        $bdname = "pwii";

        $conexao = new mysqli ($servername, $username, $password, $bdname); #criando uma instancia de mysqli
        
        if ($conexao -> connect_error)
        {
            die("Conncection failed: " . $conexao -> connext_error);
        } #verificando a conexao

        $sql = "select * from amigo";

        $resultado = $conexao -> query ($sql); #salvando na variavel resultado o retorno da execucao do comando no BD

        if($resultado != null)
        {

          echo '<table class="table m-3 mt-5 ">';
            foreach($resultado as $registro)
            {
                echo '<tr class="d-flex justify-content-center  align-items-center">
                <td>' . $registro['codigo'] . ' </td>
                <td>' . $registro['nome'] . ' </td>
                <td>' . $registro['apelido'] . ' </td>
                <td>' . $registro['email'] . ' </td>
                <td> <a href="atualizar.php?id=' . $registro['codigo'] . '"> Atualizar </a></td>
                <td> <a href="excluir.php?id=' . $registro['codigo'] . '"> Excluir </a></td>
                ';
            }
        }
        echo '</table>';

    ?>
</body>
</html>