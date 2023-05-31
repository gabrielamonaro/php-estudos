<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <title>Tabuada</title>
</head>
<body class="container">

<section>
    <table class="table container w-25 text-center">
        <tr>
            <th> Região Sudeste</th>
        </tr>
        <?php
            $sudeste = ["São Paulo", "Minas Gerais", "Rio de Janeiro", "Espírito Santo"];
       
            for ($i = 0; $i < count($sudeste); $i++)
            {
                echo "<tr> 
                    <td>" . $sudeste[$i] . "</td> </tr>";
            }      
        ?>
    </table>
    <hr></hr>
</section>
    

<section>
    <table class="table container w-25 text-center my-4">
        <tr>
            <th colspan="3" class="text-center"> Filmes</th>
        </tr>
        <tr>
            <th class="text-center"> Título </th>
            <th class="text-center"> Duração </th>
            <th class="text-center"> Gênero </th>
        </tr>
        <?php
            $filme1 = array(
                'titulo' => 'Uma mente Brilhante',
                'duracao' => '135 min',
                'genero' => 'drama'
            );
       
        echo "<tr> 
                <td>" . $filme1['titulo'] . "</td>
                <td>" . $filme1['duracao'] . "</td>
                <td>" . $filme1['genero'] . "</td>
            </tr>"; 
        ?>
    </table>

    <hr></hr>
</section>

    <form class="container w-50 text-center">
        <label for="estados">Estado para envio:  </label>
        <select name="estados" id="estados">
            <?php
                $estados = array("Acre","Alagoas","Amapá","Amazonas","Bahia","
                Ceará", "Espírito Santo","Goiás","Maranhão","Mato Grosso","Mato Grosso
                do Sul ", "Minas Gerais","Pará","Paraíba","Paraná","Pernambuco","Piauí", "Rio de Janeiro", "Rio Grande do Norte","Rio Grande do Sul","Rondônia","Roraima","Santa Catarina", "São Paulo","Santa Catarina", "Sergipe", "Tocantins","Distrito Federal");
            
                for($i = 0; $i < count($estados); $i++)
                {
                    echo '<option value="' . $i . '"> ' . $estados[$i]. '</option>';
                };
            
            ?>
            
        </select>
    </form>

    <hr></hr>
    <section>

    <table class="table container w-50 my-5 text-center">
             <tr> 
                <th> Nome do produto </th>
                <th> Valor </th>
            </tr>   


                <?php
                    $produtos = array(
                        array("Processador","900"),
                        array("Mouse","15"),
                        array("Teclado","20"),
                        array("Impressora","500"),
                        array("Monitor","450"),
                        array("Placa de Vídeo","1500"),
                        array("Memória RAM 8G","500"),
                        array("Placa Mãe","600"),
                        array("Mouse Pad","25"),
                        array("SSD","245"),
                        );
                
                
                    for ($i = 0 ; $i < count($produtos); $i++)
                    {
                        echo "<tr> 
                            <td>". $produtos[$i][0] . "</td>
                            <td>". $produtos[$i][1] . "</td>
                        </tr>";
                    };
                ?>
    </table>

                

    </section>

    <section>
        <hr>
    
        <table class="table container w-50 my-5 text-center">
            <tr>
                <th> Estado </th>
                <th> Sigla</th>
            </tr>
            <?php
                $listaEstados = array(
                    array("estado"=> "Acre","sigla"=> "AC" ),
                    array("estado"=> "Alagoas","sigla"=> "AL" ),
                    array("estado"=> "Amapá","sigla"=> "AP" ),
                    array("estado"=> "Amazonas","sigla"=> "AM" ),
                    array("estado"=> "Bahia","sigla"=> "BA" ),
                    array("estado"=> "Ceará","sigla"=> "CE" ),
                    array("estado"=> "Espírito Santo","sigla"=> "ES" ),
                    array("estado"=> "Goiás","sigla"=> "GO" ),
                    array("estado"=> "Maranhão","sigla"=> "MA" ),
                    array("estado"=> "Mato Grosso","sigla"=> "MT" ),
                    array("estado"=> "Mato Grosso do Sul","sigla"=> "MS" ),
                    array("estado"=> "Minas Gerais","sigla"=> "MG" ),
                    array("estado"=> "Pará","sigla"=> "PA" ),
                    array("estado"=> "Paraíba","sigla"=> "PB" ),
                    array("estado"=> "Paraná","sigla"=> "PR" ),
                    array("estado"=> "Pernambuco","sigla"=> "PE" ),
                    array("estado"=> "Piauí","sigla"=> "PI" ),
                    array("estado"=> "Rio de Janeiro","sigla"=> "RJ" ),
                    array("estado"=> "Rio Grande do Norte","sigla"=> "RN" ),
                    array("estado"=> "Rio Grande do Sul","sigla"=> "RS" ),
                    array("estado"=> "Rondônia","sigla"=> "RO" ),
                    array("estado"=> "Roraima","sigla"=> "RR" ),
                    array("estado"=> "Santa Catarina","sigla"=> "SC" ),
                    array("estado"=> "São Paulo","sigla"=> "SP" ),
                    array("estado"=> "Sergipe","sigla"=> "SE" ),
                    array("estado"=> "Tocantins","sigla"=> "TO" ),
                    array("estado"=> "Distrito Federal","sigla"=> "DF" ));

                for($i = 0; $i< count($listaEstados); $i++)
                echo "<tr>
                    <td>". $listaEstados[$i]['estado'] ."</td>
                    <td>". $listaEstados[$i]['sigla'] ."</td>
                </tr>";
            ?>
        </table>
    </section>
    
</body>
</html>