<?php
include '../banco/conexao.php';
session_start();
include '../funcoes.php';
    login();
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <meta charset="UTF-8">
    <title>AWCS</title>
</head>
<style>
    .aleatorio{
      width:100%;
      height: 100px;
    }
</style>
<body>
<header>       <div class="cabes">
               <a href="../pag/pagina.php"> <img src="../pag/img/logoawcs.png" class="awcs"></a>
            <ul>
                <li><h3><a href="../empredit/0-empresa.php"><b> Empresas</a></b></h3></li>
                <li><h3><a href="0-prod.php"><b>Produtos</b></a></h3></li>
                <li><h3><a href="../usuarios/1-usuarios.php"><b>Usuários</b></a></h3></li>
                <li><h3><a href="../lista/0.1mostra.php"><b class="links_topo">Listas</b></a></h3></li>
                <li><h3><a href="../about.php"><b class="links_topo">Sobre Nós</b></a></h3></li>
        </ul>
        <div class="sair">               
                <a href="../login/logout.php"><div class="sair-1"></div></a> 
        </div>
    </div>

</header>    

<a href="1-prod.php?id=<?=$id?>" class="bt">voltar</a>

<?php

   $busca = mysqli_query($banco_de_dados,"select * from produto where id='$id'");
   $array = mysqli_fetch_assoc($busca);
   $nome = $array['nome'];

   ?><center><table border="0"><form action="3-prod.php" method='GET'><?php
   echo "<h1>$nome</h1>";
   foreach ($array as $key => $value)
   {
       if($key == 'id' || $key =='Usuario_alt' || $key == 'data_cad' || $key =='Usuario_cad')
       {}   else{
                       if($key == 'nome')
                        {echo"
                         <tr>
                                <td><input class='form-control' type='text' maxlength='48' placeholder='$value' name='nome'></td> </tr>";
                        }
                        if($key == 'Empresa')
                        {?>
                        <tr> 
                         <td><select class='form-control' name="empresa"  required>
                      
                         <?php
                         echo "<option value='$value'>$value</option>";
                         $usu = $_SESSION['id'];
                         $busca=mysqli_query($banco_de_dados,"select * from empresa where usuario='$usu'");
                         $novo=mysqli_num_rows($busca);
                         $vetor = mysqli_fetch_all($busca,MYSQLI_ASSOC);
                         foreach($vetor as $registro)
                         { 
                      
                           
                           foreach ($registro as $ww => $ss) 
                             {
                               if($ww == 'nome')
                               {   echo "<option value='$ss'>$ss</option>"; }
                             }
                           
                         }
                         ?>
                     </select></td>
                                </tr><?php  
                        }  
                        if($key == 'valor')
                        {
                         echo "<tr>
                                   <td><input  class='form-control' type='number'  name='valor' placeholder='valor:R$$value'></td></tr>";
                        }
                        if($key == 'Tipo')
                        {
                         echo "<tr>
                                   <td><input class='form-control' type='text' name='Tipo' maxlength='100'placeholder='$value' ></td></tr>";
                        }
                        if($key == 'data_alt')
                        {
                         echo "<tr><td><input class='form-control' required type='date'  name='data'></td></tr>";
                        }
                }
   }
   echo "<tr><td>   <input class='form-control' required type='checkbox' value='$id' name='id'></td></tr>";
   echo "<tr><td><input class='form-control' type='submit' value='Editar!'></td></tr>";
  ?>
  </center>
  </form>
  </table>
  <div class='aleatorio'>

  </div>
  <footer>
       <div class="final">
            <img src="../pag/img/unip.png" style="padding-bottom: 20px">
            <img src="../pag/img/logoawcs.png" class="awcs">
            <img src="../pag/img/if.png" alt="">
       </div>

   </footer>
</body>
</html>