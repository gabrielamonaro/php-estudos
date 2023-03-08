<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Mensagem</title>
</head>
<body>
    <div class="w3-container w3-teal">
    <h1 style="text-transform: uppercase">Promoção do mês de aniversário! </h1>    
    <h1>
            
             <?php
            echo "".$_POST['txtNome']." ! <br>"; //nome
            echo "Valor da Compra Sem Desconto: R$ ".$_POST['txtValorCompra']."<br>";
            echo "Forma de Pagamento escolhida: ".$_POST['cmbPag']."<br>";
            
            ?>

            <?php
            if($_POST['cmbPag'] == "deposito")
            { 
                $desconto = 10;
            }
            else if($_POST['cmbPag'] == "boleto")
            {
                $desconto = 8;
            }
            else 
            {
                $desconto = 0;
            }
            $valorDaCompra = $_POST['txtValorCompra'];
            echo "Desconto: de R$".$desconto."<br>";
            echo "Você econonomizou: R$".($valorDaCompra*($desconto)/100)."<br>";
            echo "Valor a pagar: R$".($valorDaCompra*(100-$desconto)/100)."<br>";
            ?> 
        </h1> 
    </div>
</body>
</html>