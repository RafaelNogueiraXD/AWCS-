<?php
    include '../banco/conexao.php';
    $id=$_GET['id'];
    $apagar = "delete from empresa where id='$id' ";
    $apag = mysqli_query($banco_de_dados,$apagar);

    $apagar = "delete from fornecer where idempresa='$id' ";
    $apag = mysqli_query($banco_de_dados,$apagar);
    header("Location: ../pag/pagina.php");
?>