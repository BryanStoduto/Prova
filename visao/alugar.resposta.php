<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Valor da locação</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </head>

    
    <body>
        <h1 class="text-center">Valor da locação</h1>

        <div class="jumbotron bg-light text-center">
            <?php
                echo "<h2>Nome Cliente: ".$_GET['txtnomeDoCliente']."</h2>";

                echo "<br>";

                echo "<h4>CPF: ".$_GET['txtcpf']."</h4>";

                echo "<h4>Idade: ".$_GET['txtidade']."</h4>";

                echo "<h4>Modelo Veículo: ".$_GET['txtmodeloDeVeiculo']."</h4>";

                echo "<h4>Modelo Veículo: ".$_GET['txttipoDeVeiculo']."</h4>";

                echo "<h4>Tipo de Combustível: ".$_GET['txttipoDeCombustivel']."</h4>";

                echo "<h4>Valor da Locação: R$".$_GET['txtvalorDaLocacao']."</h4>";

                echo "<h4>Data da Locação: ".$_GET['txtdataDaLocacao']."</h4>";
                //bryan
            ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>