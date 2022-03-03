<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../jquery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sua lista</title>
</head>
<style>
    .con1{    box-shadow: 2px 2px 2px;  padding: 10px;}
</style>
<?php
    include '../banco/conexao.php';
    include '../funcoes.php';
    session_start();
    login();
    //$logado = login();
 
    
    $pega  = mysqli_query($banco_de_dados,"select * from lista where divulga=1 order by id asc");
    $array = mysqli_fetch_all($pega,MYSQLI_ASSOC);
    $linha = mysqli_num_rows($pega);
   
    //Calcular quantidade e preço
?>
<body>
<header>
        <div class="cabes">
                <a href="../pag/pagina.php"> <img src="../pag/img/logoawcs.png" class="awcs"></a>
                <ul>
                    <li><h3><a href="../empredit/0-empresa.php"><b class="links_topo">Empresas</b></a></h3></li>
                    <li><h3><a href="../produto/0-prod.php"><b class="links_topo">Produtos</b></a></h3></li>
                    <li><h3><a href="../usuarios/1-usuarios.php"><b class="links_topo">Usuários</b></a></h3></li>
                    <li><h3><a href="../lista/0.1mostra.php"><b class="links_topo">Listas</b></a></h3></li>
                <li><h3><a href="../about.php"><b class="links_topo">Sobre Nós</b></a></h3></li>
                    
            </ul>
            <div class="sair">               
                    <a href="../login/logout.php"><div class="sair-1"></div></a> 
            </div>
        </div>
    
    </header>   
<section>
<div class="cab_da_tab">
              <h2>Listas Divulgadas</h2>
              <div class="col-lg-3">
              <div class="input-group">
                        <table><tr>
                        <form action="" method="POST" enctype="multipart/form-data" id="formP">
                        <td>
                        <input type="text" class="form-control" id="palavra" placeholder="Buscar por...">
                        </td><td>
                         <input type="submit" value="verificar">
                         </td> 
                        </form>
                         </tr></table>
                    </div>
                </div>
            </div>
            <div id='tabelas' class='ts'>
                <p style="color: grey">Resultado da pesquisa</p>
                <center>
                <table class="table table-hover">
                    <thead class="thead-light">
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Data de publicação</th>
                                        <th scope="col">Ver</th>
                    </thead>
                    <tbody id="tbodi">

                    </tbody>
                </table>
                </center> 
            
            </div>
                <?php 
                        if($linha == 0 )
                        {
                           echo  "<center style='color:red'><h1> Não há listas divulgadas!</h1> </center>";
                        }else{            
                    ?>
        <div class="tabela" id='tabelap'>         
                                    <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Data de publicação</th>
                                            <th scope="col">Ver</th>
                                        </tr>
              <tbody>
                  <?php
                    foreach ($array as $registro) {
                       
                            ?>
                            <tr>
                                <td><?= $registro["id"]?></td>
                                <td><?= $registro["nome"]?></td>
                                <td><?= $registro["datahora_publicacao"]?></td>
                                <td><a href="1-mostra.php?idl=<?=$registro["id"]?>">Ver</a></td>
                            </tr>
                            <?php
                       

                    }
                }
    ?>
              </tbody>
          </table>
          
          <center>
                     <a class="btn btn-outline-secondary"  href="0-cadastro.php" role="button">Criar Lista </a>
                     </center>  
      </div>
      
</section>
   <footer class="espaço">
       
       <div class="final">
            <img src="../pag/img/unip.png" style="padding-bottom: 20px">
            <img src="../pag/img/logoawcs.png" class="awcs">
            <img src="../pag/img/if.png" alt="">
       </div>

   </footer>
   <script src="../javaScript.js"></script>
</body>
</html>

