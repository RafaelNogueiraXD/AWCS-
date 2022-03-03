<?php
include '../banco/conexao.php';
session_start();
include '../funcoes.php';
    login();
if($_GET)
{
    $empresa = $_GET['empresa'];
    $produto = $_GET['produto'];
    $valor = $_GET['valor'];
    $insere = mysqli_query($banco_de_dados,"insert into fornecer values(default,'$empresa','$produto','$valor')");
    header("Location: ../pag/pagina.php");
}
