<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_GET['nome'] ?? "";
        $sobrenome = $_GET['sobrenome'] ?? "Desconhecido";
        echo "É um prazer te conhecer, <strong> $nome $sobrenome </strong>.";

        ?>

        <p><a href="javascript:history.go(-1)" >Voltar </a></p>
    </main>
</body>
</html>