<?php


    include "../modelo/cliente.classe.php";

    $cliente =  new Cliente();

    $cliente->nomeDoCliente = $_POST['txtnomeDoCliente'];
    $cliente->cpf = $_POST['txtcpf'];
    $cliente->idade = $_POST['txtidade'];
    $cliente->modeloDeVeiculo = $_POST['txtmodeloDeVeiculo'];
    $cliente->tipoDeVeiculo = $_POST['txttipoDeVeiculo'];
    $cliente->tipoDeCombustivel = $_POST['txttipoDeCombustivel'];
    $cliente->valorDaLocacao = $_POST['txtvalorDaLocacao'];

    header("location:../visao/alugar.resposta.php?txtnomeDoCliente=$cliente->nomeDoCliente&txtcpf=$cliente->cpf&txtidade=$cliente->idade&txtmodeloDeVeiculo=$cliente->modeloDeVeiculo&txttipoDeVeiculo=$cliente->tipoDeVeiculo&txttipoDeCombustivel=$cliente->tipoDeCombustivel&txtvalorDaLocacao={$cliente->calcularAluguel()}&txtdataDaLocacao=".date('d/m/Y'));

//bryan & julio
?>