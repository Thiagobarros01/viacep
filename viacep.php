<?php
require_once "endereco.php";
class ViaCep{
public function BuscarCep(string $cep):Endereco{
return new Endereco(json_decode(file_get_contents("https://viacep.com.br/ws/$cep/json/")));
}
}



?>