<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
  
    <table class="table container w-25">
    <thead class="thead-dark">
        <tr>
            <th scope="col " class="text-center">

                <?php
                  $numero = $_GET['numero'];
                  echo "Tabuada do $numero"
                ?>
            </th>
        </tr>
    </thead>
                <?php
                  for ($i = 0; $i<10; $i++)
                  {
                    $resultado = ($numero * $i) ;
                    echo "<tr class=\"text-center\"> 
                        <td> $numero  * $i =  $resultado </td>
                    </tr>";
                  } 
                ?>
    </table>

    <form action="index.php">
        <button type="submit" class="btn-secondary btn container w-25 text-center d-block container-sm">Voltar</button>
    </form>
</body>
</html>