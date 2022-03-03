<?php

include '../banco/conexao.php';

function produto($usu,$nome,$banco_de_dados)
{
    $busca = "select * from produto where Usuario_cad ='$usu' and nome = '$nome' ";
    echo "$busca<br>";
    $busca1=mysqli_query($banco_de_dados,$busca);
    print_r($busca1);
    $linha1 = mysqli_fetch_assoc($busca1);
        foreach ($linha1 as $key => $value) 
        {
            if($key =='id')
            {$idp = $value;}
        }
   return $idp;
}

function empresa($usu,$empresa,$banco_de_dados)
{
    $busca1=mysqli_query($banco_de_dados,"select * from empresa where Usuario ='$usu' and nome = '$empresa'");

    $linha1 = mysqli_fetch_assoc($busca1);
        foreach ($linha1 as $key => $value) 
        {
            if($key =='id')
            {$idi = $value;}
        }
    
    return  $idi;

}



?>