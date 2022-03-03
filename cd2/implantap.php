<?php
session_start();
include '../banco/conexao.php';
include 'chama.php';
include '../funcoes.php';
login();
$nome = $_GET['produto'];
$tipo = $_GET['tipo'];
$desc= $_GET['desc'];
$data = $data = date(" y/m/d");
$usu= $_SESSION['id'];
$sql = "select * from produto where nome='$nome'";

$resultado=mysqli_query($banco_de_dados,$sql);
print_r($resultado);
$novo=mysqli_num_rows($resultado);
 
    if($novo == 1)
    {   header("Location: produto.php");
        echo "kkkkkkkk";
            }else{
                
                $inserir = "insert into  produto (id,nome,Tipo,descricao,data_cad,Usuario_cad)
                            values
                            (default,'$nome','$tipo','$desc','$data','$usu')";
                            $teste=mysqli_query($banco_de_dados,$inserir);
                            header("Location: ../produto/0-prod.php");
                                 }
    
?>