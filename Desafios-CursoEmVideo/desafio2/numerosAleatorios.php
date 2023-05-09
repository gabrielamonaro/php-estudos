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
        <h1>Gerador de números aleatórios</h1>
    </header>

    <main>
        <section>
            <p>Clique para gerar um número entre 0 e 100. </p>
            <button onclick=location.reload()> Gerar novo número </button>
           
           <?php
        
            $numero = rand(1, 100);

            echo "<p> O número gerado foi <strong> $numero</strong>. </p>" ;

            ?>
        </section>
    </main>
</body>
</html>