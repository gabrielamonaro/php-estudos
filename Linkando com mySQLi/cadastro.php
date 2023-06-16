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

<h1 class="container text-center"> Cadastro de Amigos</h1>

<form action="cadastroAction.php" method="post" class="w-50 container d-flex flex-column">
    <label for="codigo">Código</label>
    <input class="form-control" type="text" name="codigo" disabled>

    <label for="nome">Nome</label>
    <input class="form-control" type="text" name="nome">

    <label for="apelido">Apelido</label>
    <input class="form-control" type="text" name="apelido">

    <label for="email">e-mail</label>
    <input class="form-control" type="text" name="email">

    <button class="btn btn-success mt-2">
        Adicionar
    </button>
</form>
    
</body>
</html>