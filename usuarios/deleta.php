<?php
    include '../banco/conexao.php';
    $id=$_GET['id'];
    $apagar = "delete from usuario where id='$id' ";
    $apag = mysqli_query($banco_de_dados,$apagar);
    header("Location: ../pag/pagina.php");
?>