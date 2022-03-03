<?php
    include '../banco/conexao.php';
    $idl=$_GET['idl'];
    $apagar = "delete from lista where id='$idl'";
    $apag = mysqli_query($banco_de_dados,$apagar);
    mysqli_query($banco_de_dados,"delete from itens where idlista=$idl");
  
    header("Location: ../pag/pagina.php");

?>