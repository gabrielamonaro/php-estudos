<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Formulario/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <main>
        <section>
            <?php
            $numero = $_GET['number'];

            echo "<p> O número escolhido foi <strong>$numero</strong>. </p>" ;
            echo "<p> O número anterior é " . ($numero-1) . " </p>" ;
            echo "<p> O número depois do escolhido é " . ($numero+1) ." </p>" ;
            ?>
        </section>
    </main>
</body>
</html>