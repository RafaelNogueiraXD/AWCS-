<html>
        <head>
        <title>AWCS</title>

        </head>
</html>

<?php
session_start();
include 'cnpj.php';
include '../banco/conexao.php';
include '../funcoes.php';
login();
$nome = $_GET['empresa'];
$local = $_GET['local'];
$cnpj = $_GET['cnpj'];
$resumo = $_GET['resumo'];
$data = date(" y/m/d");
//print_r($_SESSION);
$nome_usu = $_SESSION['id'];
$r = teste($cnpj);

$resultado=mysqli_query($banco_de_dados,"select * from empresa where cnpj=$cnpj and nome=$nome");
$novo=mysqli_num_rows($resultado);

if($r == 1)
{
    header("Location: empresa.html");
} else { 
    if($novo == 1)
    {   header("Location: empresa.html");
            }else{
                $inserir = "insert into empresa (id,nome,localiza,CNPJ,Usuario,Resumo,data_cad)
                            values
                            (default,'$nome','$local','$cnpj','$nome_usu','$resumo','$data')";
                            $teste=mysqli_query($banco_de_dados,$inserir);
                            header("Location: ../pag/pagina.php");
                        }
    }
?>