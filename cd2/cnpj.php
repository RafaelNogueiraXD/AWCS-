<?php

function teste($cnpj){
// Extrai somente os números
//echo "$cpf ";
$X = FALSE;

$cnpj = preg_replace( '/[^0-9]/is', '', $cnpj );
     
// Verifica se foi informado todos os digitos corretamente
if (strlen($cnpj) != 14) {
 //   echo "errado fase 1<br>";
    $f = FALSE;
}else { $f = TRUE;}
// Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
if (preg_match('/(\d)\1{10}/', $cnpj)) {
   // echo "errado  fase 2<br>";
    $g = FALSE;
}else { $g = TRUE;}
// Faz o calculo para validar o CPF
for ($t = 9; $t < 11; $t++) {
    for ($d = 0, $c = 0; $c < $t; $c++) {
        $d += $cnpj{$c} * (($t + 1) - $c);
    }
    $d = ((10 * $d) % 11) % 10;
    if ($cnpj{$c} != $d) {
     //  echo "errado  fase 3 <br>";
       $X = FALSE;
    }
    
    //echo "verdadeiro fase 4 <br>";
    $X = TRUE;
}
if($X == TRUE && $f == TRUE && $g == TRUE)
{
 // echo "tudo certo";
   return 0;
}else{
  return 1;
}
}