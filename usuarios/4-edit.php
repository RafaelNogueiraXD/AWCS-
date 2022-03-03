<?php
session_start();
include '../banco/conexao.php';
include '../cadastro/cpf.php';
include '../funcoes.php';
    login();
$id = $_GET['id'];
$idu = $_SESSION['id'];
echo "$id";
    $data_alt = $_GET['data'];
    $mudar = "UPDATE usuario SET data_alt='$data_alt' where id=$id";

      $muda = mysqli_query($banco_de_dados,$mudar);
      print_r($muda);
     

      $mudar = "UPDATE usuario SET Usuario_alt='$idu' where id=$id";
        $muda = mysqli_query($banco_de_dados,$mudar);
        print_r($muda);
         
   



if($_GET['nome'])
{ $nome = $_GET['nome'];
  $mudar = "UPDATE usuario SET nome='$nome' where id=$id";
    $muda =mysqli_query($banco_de_dados,$mudar);
}
if($_GET['email'])
{ $email = $_GET['email'];
  $mudar = "UPDATE usuario SET email='$email' where id=$id";

    $muda = mysqli_query($banco_de_dados,$mudar);
    print_r($muda);
    echo "$email";
}
if($_GET['cpf'])
{ $cpf = $_GET['cpf'];
    $teste = teste($cpf);
    if ($teste == 1)
    { echo "erro";}else{
      $mudar = "UPDATE usuario SET cpf='$cpf' where id=$id";

      $muda = mysqli_query($banco_de_dados,$mudar);
      print_r($muda);
      echo "$cpf";  
    }
}
if($_GET['cargo'])
{ $cargo = $_GET['cargo'];

    $mudar = "UPDATE usuario SET cargo='$cargo' where id=$id";

      $muda = mysqli_query($banco_de_dados,$mudar);
      print_r($muda);
      echo "<br>$cargo";  
    
}
if($_GET['senha'])
{
    $senha = $_GET['senha'];
    $mudar = "UPDATE usuario Set senha=$senha where id=$id";
    $muda = mysqli_query($banco_de_dados,$mudar);
    echo "<br>$senha";
}
header("Location: 1-usuarios.php");
/*0
local
cnpj
desc
data_alt
*/

?>