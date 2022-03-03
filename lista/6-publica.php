<?php
include '../banco/conexao.php'; 
if($_GET['id'])
{
    $id = $_GET['id'];
    mysqli_query($banco_de_dados,"UPDATE lista set divulga='1' where id=$id") or exit("<h1>ERRO!</h1>");
    $data = date('d-m-y H:i:s');
    mysqli_query($banco_de_dados,"UPDATE lista set datahora_publicacao='$data' where id=$id") or exit("<h1>ERRO1!</h1>"); 
    header("Location: 1-mostra.php?idl=$id");
}

?>