<?php

class Cliente{

    public  $nomeDoCliente;
    public  $cpf;
    public  $idade;
    public  $modeloDeVeiculo;
    public  $tipoDeVeiculo;
    public  $tipoDeCombustivel;
    public  $valorDaLocacao;
    public  $dataDaLocacao;


   
   public function getNomeDoCliente()
   {
      return $this->nomeDoCliente;
   }

   
   public function setNomeDoCliente($nomeDoCliente)
   {
      $this->nomeDoCliente = $nomeDoCliente;

      return $this;
   }

   
   public function getCpf()
   {
      return $this->cpf;
   }

   
   public function setCpf($cpf)
   {
      $this->cpf = $cpf;

      return $this;
   }

 
   public function getIdade()
   {
      return $this->idade;
   }

  
   public function setIdade($idade)
   {
      $this->idade = $idade;

      return $this;
   }

   
   public function getModeloDeVeiculo()
   {
      return $this->modeloDeVeiculo;
   }

  
   public function setModeloDeVeiculo($modeloDeVeiculo)
   {
      $this->modeloDeVeiculo = $modeloDeVeiculo;

      return $this;
   }

 
   public function getTipoDeVeiculo()
   {
      return $this->tipoDeVeiculo;
   }

   
   public function setTipoDeVeiculo($tipoDeVeiculo)
   {
      $this->tipoDeVeiculo = $tipoDeVeiculo;

      return $this;
   }

   
   public function getTipoDeCombustivel()
   {
      return $this->tipoDeCombustivel;
   }

   
   public function setTipoDeCombustivel($tipoDeCombustivel)
   {
      $this->tipoDeCombustivel = $tipoDeCombustivel;

      return $this;
   }

   
   public function getValorDaLocacao()
   {
      return $this->valorDaLocacao;
   }

   
   public function setValorDaLocacao($valorDaLocacao)
   {
      $this->valorDaLocacao = $valorDaLocacao;

      return $this;
   }

   
   public function getDataDaLocacao()
   {
      return $this->dataDaLocacao;
   }

   
   public function setDataDaLocacao($dataDaLocacao)
   {
      $this->dataDaLocacao = $dataDaLocacao;

      return $this;
   }

   //bryan



//julio
   public function calcularAluguel(){

        if($this->tipoDeCombustivel == 'GNV'){

            return $this->valorDaLocacao + 50;

        }
        else{
            return $this->valorDaLocacao + 100;
        }
        
   }

  


}



?>