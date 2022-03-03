<?php
    include '../banco/conexao.php';
    $id=$_GET['id'];
    $apagar = "delete from produto where id='$id' ";
    $apag = mysqli_query($banco_de_dados,$apagar);

    $apagar = "delete from fornecer where idproduto='$id' ";
    $apag = mysqli_query($banco_de_dados,$apagar);
    header("Location: ../0-prod.php.php");

?>