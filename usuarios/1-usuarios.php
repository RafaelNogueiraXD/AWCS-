<?php
          session_start();
        include '../banco/conexao.php';
        include '../funcoes.php';
        
    login();
    ?>
<html>

    <head>
    <link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="../jquery.js"></script>
        <title>AWCS</title>

    </head>
    <style>
 
  }</style>
    <body>
    <header>       <div class="cabes">
               <a href="../pag/pagina.php"> <img src="../pag/img/logoawcs.png" class="awcs"></a>
            <ul>
            <li><h3><a href="../empredit/0-empresa.php"><b>Empresas</b></a></h3></li>
                <li><h3><a href="../produto/0-prod.php"><b>Produtos</b></a></h3></li>
                <li><h3><a href=""><b>Usuários</b></a></h3></li>
                <li><h3><a href="../lista/0.1mostra.php"><b class="links_topo">Listas</b></a></h3></li>
                <li><h3><a href="../about.php"><b class="links_topo">Sobre Nós</b></a></h3></li>
        </ul>
        <div class="sair">               
                <a href="../login/logout.php"><div class="sair-1"></div></a> 
        </div>
    </div>

</header>   
        
<section>
        
       
      
        <?php
                  $usu = $_SESSION['id'];/*
                        if('Administrador' == $_SESSION['cargo'] ){
                            $busca=mysqli_query($banco_de_dados,"select * from usuario where Usuario_cad='$usu'");}
                            if('Gerenciador' == $_SESSION['cargo'])
                            {}*/
                        $busca=mysqli_query($banco_de_dados,"select * from usuario order by id asc ");
                        $novo=mysqli_num_rows($busca);
                        // UM RESULTADO SOMENTE
                        //$linha = mysqli_fetch_assoc($busca);
                        // VÁRIOS RESULTADOS
                  $linha = mysqli_fetch_all($busca,MYSQLI_ASSOC);
                    ?> 
                     <div class="cab_da_tab">
                <h2>Usuarios Cadastradaos</h2> 
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
                        <th scope="col">Email</th>
                                        <th scope="col">Ver</th>
                    </thead>
                    <tbody id="tbodi">

                    </tbody>
                </table>
                </center> 
            
            </div>

                <div class="tabela"  id='tabelap'>    
                <table class="table table-hover">     
                              <thead class="thead-light">
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Ver</th>
                                        </tr>
                                </thead>
                                <tbody>
                    <?php

                    foreach($linha as $registro)
                   {  ?>
                            <tr>
                            <td><?= $registro['id']?></td>
                             <td><?= $registro['nome']?></td>
                              <td><?= $registro['email'] ?></td>  
                             <td><a href="2-mostrau.php?id=<?= $registro['id']?>">Visualizar</a></td>
                            </tr>
                     <?php
         
                      
                     }
   
        ?>
            </tbody>
            </table>
            </div>
            <center>
            <?php
                                    if($_SESSION['cargo'] != 'Membro'){
  ?>                                      
      
    <a class="btn btn-outline-secondary" href="../cadastro/cadastro.html" role="button">Cadastre um usuário</a>
  <?php
                                    }
  ?>
            </center>
            </section>
            <footer>
       <div class="final">
            <img src="../pag/img/unip.png" style="padding-bottom: 20px">
            <img src="../pag/img/logoawcs.png" class="awcs">
            <img src="../pag/img/if.png" alt="">
       </div>

   </footer>

   <script src="../javaScript.js"></script>
    </body>   
</html>

