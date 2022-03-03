
<html>
<head>
    <title>Cadastrado</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="../CSS/grid.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/info.css">
</head>
<?php
session_start();
include '../banco/conexao.php';
include 'cpf.php';
include '../funcoes.php';
login();
$nome = $_GET['nome'];
$senha = $_GET['senha'];
$cargo = $_GET['cargo'];
$email = $_GET['email'];
$cpf = $_GET['cpf'];
$usu_cad = $_SESSION['id'];
$data_cad = date("y/m/d");

$resultado=mysqli_query($banco_de_dados,"select * from usuario where email='$email and cpf=$cpf'");
$novo=mysqli_num_rows($resultado);

$r = teste($cpf);

if($r == 1)
{
    header("Location: cadastro.html");
}else{


if($novo == 1)
            {
                
                   header("Location: cadastro.html");
            }else{
            
              // if($Tof == TRUE){
                    $inserir = "insert into usuario
                    (id,nome,cpf,cargo,email,senha,data_cad,Usuario_cad)
                    values
                    (default,'$nome','$cpf ','$cargo','$email','$senha','$data_cad','$usu_cad')";
                    $teste=mysqli_query($banco_de_dados,$inserir);

                    header("Location: ../usuarios/1-usuarios.php");
                    ?>
                    <center>
                    <h1>usuario cadastrado com sucesso!</h1>
                    <h3>Deseja cadastrar outro usuário?</h3>
                    <a href="../pag/pagina.php">Seu Perfil</a> <b>//</b>
                    <a href="cadastro.html">Cadestre outro...</a>
                    </center>
                    <?php
                    
                //}else{header("Location: cadastro.html");}
            }
        }
?>


</html>