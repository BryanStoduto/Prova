<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Formulário</title>
  </head>
  <body>

    
    <form action="../controle/cliente.controle.php" method="post" style="margin-left: 30%; margin-right: 30%; margin-top: 5%; margin-bottom: 5%;">
        <div class="form-group">
            <label for="txtnomeDoCliente">Nome</label>
            <input type="text" name="txtnomeDoCliente" id="nome" class="form-control" placeholder="Seu nome aqui">
        </div>
        <div class="form-group">
            <label for="txtnomeDoCliente">CPF</label>
            <input type="number" name="txtcpf" id="cpf" class="form-control" placeholder="Seu CPF aqui">
            <small class="form-text text-muted">Nós nunca vamos compartilhar seu CPF com nimguém.</small>
        </div>
        <div class="form-group">
            <label for="txtnomeDoCliente">Idade</label>
            <input type="number" id="idade" name="txtidade" class="form-control" placeholder="Sua idade aqui">
        </div>
        <label for="tipoVeiculo">Veículo</label>

        <select class="form-control" name="txtmodeloDeVeiculo">
            <option value="Uno">Uno</option>
            <option value="Siena">Siena</option>
            <option value="Ford Fusion">Ford Fusion</option>
        </select>

        <label for="tipoVeiculo">Tipo de veículo</label>

        <select class="form-control" name="txttipoDeVeiculo">
            <option value="Passeio">Passeio</option>
            <option value="Executivo">Executivo</option>
        </select>

        <label for="tipoCombustivel">Tipo de combustível</label>

        <select class="form-control" name="txttipoDeCombustivel">
            <option value="GNV">GNV</option>
            <option value="Gasolina">Gasolina</option>
        </select>
        
        <div class="form-group">
            <label for="txtvalorDaLocacao">Valor da locação</label>
            <input type="number" name="txtvalorDaLocacao" id="valor" class="form-control" placeholder="Preço da locação">
        </div>
        <button type="submit" id="submit" onclick="validate()" class="btn btn-primary">Enviar</button>
    </form>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <script src="../scripts/validacao.js"></script>

  </body>
</html>