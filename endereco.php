<?php
require_once 'viacep.php';
class Endereco{
  public $Cep;
  public $Logradouro;
  public $Complemento;
  public $Bairro;
  public $Localidade;
  public $Uf;
  public function __construct($cep1){
  
      $this->Cep=$cep1->cep;
      $this->Logradouro=$cep1->logradouro;
      $this->Complemento=$cep1->complemento;
      $this->Bairro=$cep1->bairro;
      $this->Localidade=$cep1->localidade;
      $this->Uf=$cep1->uf;
  }
}
 

?>