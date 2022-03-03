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
    $mudar = "UPDATE produto SET data_alt='$data_alt' where id=$id";

      $muda = mysqli_query($banco_de_dados,$mudar);
      print_r($muda);
     

      $mudar = "UPDATE produto SET Usuario_alt='$idu' where id=$id";
        $muda = mysqli_query($banco_de_dados,$mudar);
        print_r($muda);
         
   



if($_GET['nome'])
{ $nome = $_GET['nome'];
  $mudar = "UPDATE produto SET nome='$nome' where id=$id";
    $muda =mysqli_query($banco_de_dados,$mudar);
}
if($_GET['valor'])
{ $valor = $_GET['valor'];
  $mudar = "UPDATE produto SET valor='$valor' where id=$id";

    $muda = mysqli_query($banco_de_dados,$mudar);
    print_r($muda);
    echo "$valor";
}
if($_GET['tipo'])
{ $tipo = $_GET['tipo'];
    
    if ($teste == 1)
    { echo "erro";}else{
      $mudar = "UPDATE produto SET Tipo='$tipo' where id=$id";

      $muda = mysqli_query($banco_de_dados,$mudar);
      print_r($muda);
      echo "$tipo";  
    }
}
if($_GET['empresa'])
{ $empresa = $_GET['empresa'];

    $mudar = "UPDATE produto SET Empresa='$empresa' where id=$id";

      $muda = mysqli_query($banco_de_dados,$mudar);
      print_r($muda);
      echo "<br>$empresa";  
    
}
 header("Location: 0-prod.php");
/*0
local
cnpj
desc
data_alt
*/

?>