<?php
session_start();
include '../banco/conexao.php';
include '../cd2/cnpj.php';
include '../funcoes.php';
    login();
$id = $_GET['id'];
$idu = $_SESSION['id'];
echo "$id<br>";
    $data_alt = date(" y/m/d");
    $mudar = "UPDATE empresa SET data_alt='$data_alt' where id=$id";

      $muda = mysqli_query($banco_de_dados,$mudar);
      print_r($muda);
     

      $mudar = "UPDATE empresa SET Usuario_alt='$idu' where id=$id";
        $muda = mysqli_query($banco_de_dados,$mudar);
        print_r($muda);
         
   



if($_GET['nome'])
{ $nome = $_GET['nome'];
  $mudar = "UPDATE empresa SET nome='$nome' where id=$id";
    $muda =mysqli_query($banco_de_dados,$mudar);
    echo "mudou";
}
if($_GET['local'])
{ $local = $_GET['local'];
  $mudar = "UPDATE empresa SET localiza='$local' where id=$id";

    $muda = mysqli_query($banco_de_dados,$mudar);
    print_r($muda);
    echo "$local";
}
if($_GET['cnpj'])
{ $cnpj = $_GET['cnpj'];
    $teste = teste($cnpj);
    if ($teste == 1)
    { echo "erro";}else{
      $mudar = "UPDATE empresa SET CNPJ='$cnpj' where id=$id";

      $muda = mysqli_query($banco_de_dados,$mudar);
      print_r($muda);
      echo "$cnpj";  
    }
}
if($_GET['resumo'])
{ $resumo = $_GET['resumo'];

    $mudar = "UPDATE empresa SET Resumo='$resumo' where id=$id";

      $muda = mysqli_query($banco_de_dados,$mudar);
      print_r($muda);
      echo "<br>$resumo";  
    
}
 header("Location: ../pag/pagina.php");
/*0
local
cnpj
desc
data_alt
*/

?>