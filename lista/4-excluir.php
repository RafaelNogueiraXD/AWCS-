<?php
include '../banco/conexao.php';
echo "aqui exclui";
$id =$_GET['idi'];
$idl = $_GET['idl'];
mysqli_query($banco_de_dados,"delete from itens where id=$id") or exit("erro");

header("Location: 1-mostra.php?idl=$idl");


?>