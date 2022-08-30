<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body><fieldset>
    
<?php 
require_once "endereco.php";
$viaCep=new ViaCep();
$endereco=$viaCep->BuscarCep("65040430");
echo "<p>".$endereco->Localidade."</p>";
echo "<p>".$endereco->Cep."</p>";
echo "<p>".$endereco->Uf."</p>";
?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
    </fieldset> 
    
</html>