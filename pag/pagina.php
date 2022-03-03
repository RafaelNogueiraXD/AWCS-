<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link href="https://font.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="jquery.js"></script>    

    <title>Perfil</title>
</head>
<style>
      
        button{border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;}
</style>
<?php
include '../banco/conexao.php';
include '../funcoes.php';
session_start();
login();

$id = $_SESSION['id'];
//$logado = login();


?>
<body>
    <header>
        
        <div class="cabes">
               <a href=""> <img src="img/logoawcs.png" class="awcs"></a>
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
   <!--- <header>
        <div class="opcoes">     </div>
    </header>
   ---> 
    <section>
        <main>
                <div class="dado-usu">
                <button  class="padrao"id="bt4">Perfil</button><button class="padrao" id="bt5">Permissões</button>
                <div class="div4"> 
                                       <b><h2 class="h22">Bem-vindo</h2></b>
                                                   <br>
                        <div>
                            <p>Nome:  <?=  $_SESSION['nome'];?></p>
                            <p>Email:  <?=  $_SESSION['email'];?></p>
                            <p>Cargo:  <?=  $_SESSION['cargo'];?></p>
                        </div>
                </div>

                    <div class="div5">                        <center>
                                       <b><h2 class="h222">Suas Permissões</h2></b>
                                       </center>                    <br>
                        <div>
                            <p>Visualizar Produtos,Empresas e Listas <img src="img/certo.jpg" width="50px" height="30px"></p>
                            <p>Cadastrar Produtos,Empresas e Usuarios <?php
                            if($_SESSION['cargo'] != 'Membro'){
                                ?>
                                <img src="img/certo.jpg" width="50px" height="30px">
                                <?php
                            }else{
                                ?>
                                <img src="img/errado.jpg" width="50px" height="30px">
                                <?php

                            }?></p>


                            <p>Criar Listas <img src="img/certo.jpg" width="50px" height="30px"></p>
                        </div>
                    </div>

                </div>
        
                <div class="divglobal" id="dg">
                  <!---  <div class="div1">
                         <ul>
                             <li><button id="um" class="um" onclick="mostra1()" ><b>Produtos</b></button></a></li>
                             <li><button id="um" class="um" onclick="mostra2()"><b>Empresas</b></button></li>
                             <li><button id="um" class="um" onclick="mostra3()"><b>Usuários</b></button></li>
                         </ul>
                    </div>--->
     
     
                         
                    <button id="muda1" class='padrao'>Ver</button><button class='padrao' id="muda2">Executar</button>
                    <center>     
                             <h3 id="sai">Veja  as funções do sistema!</h3>
                    <?php
                     $cargo = $_SESSION['cargo']; 
                    if ($cargo != "Membro") { ?>
                    <div class="acoes">             
                           <ul class="list-group">
                       <li class="list-group-item list-group-item-secondary">Cadastra um Produto</li>
                        <li class="list-group-item list-group-item-secondary">Cadastrar uma Empresa</li>
                        <li class="list-group-item list-group-item-secondary">Cadastrar um Usuário</li>
                        <li class="list-group-item list-group-item-secondary">Criar Listas com produtos de Determinadas Empresas</li>
                        <li class="list-group-item list-group-item-secondary">Atribuir Itens há empresa</li>
                       
                    </ul>
                    </div>

                
            
            <div class="btoes">  
                        <table> <tr>
                                <td>
              <a class="btn btn-outline-secondary" href="../cd2/produto.php" role="button">Cadastre um Produto</a> <br>
            
              </td>
                        </tr><tr>
                                <td>
                        
            <a class="btn btn-outline-secondary" href="../cd2/empresa.html" role="button">Cadastre uma empresa</a> <br>
                    
            </td>
                        </tr><tr>
                                <td>
            <a class="btn btn-outline-secondary" href="../cadastro/cadastro.html" role="button">Cadastre um usuário</a><br>
            
            </td>
                        </tr><tr>
                                <td>
           
            <a class="btn btn-outline-secondary" href="../fornecer/0fornece.php" role="button">Atribuir Item há empresa</a> <br>
           
            </td>
                        </tr>
                        <tr>
                        <td>
                     <a class="btn btn-outline-secondary" href="../lista/0-cadastro.php" role="button">Criar Lista </a>                        
                        </td></tr>
            </table>
            </div>
            <?php
                }else{?>
                <div class="acoes">
                  <ul class="list-group">      
                        <li class='list-group-item list-group-item-secondary'>Ver Empresas</li>
                        <li class='list-group-item list-group-item-secondary'>Ver Produtos</li>
                        <li class='list-group-item list-group-item-secondary'>Ver Usuarios</li>
                        <li class='list-group-item list-group-item-secondary'>Criar listas</li>
                  </ul>
                  </div>
                    <div class="btoes">
                        <p>No sistema você está cadastra como <b>"Membro"</b> ou seja não pode cadastrar... apenas Visualizar:</p>
                        <table> <tr>
                                <td>
              <a class="btn btn-outline-secondary" href="../produto/0-prod.php" role="button">Ver Produtos</a> <br>
            
              </td>
                        </tr><tr>
                                <td>
                        
            <a class="btn btn-outline-secondary" href="../empredit/0-empresa.php" role="button">Ver empresas</a> <br>
                    
            </td>
                        </tr><tr>
                                <td>
            <a class="btn btn-outline-secondary" href="../usuarios/1-usuarios.php" role="button">Ver usuários</a><br>
            
            </td>
                        </tr><tr>

                        <tr>
                        <td>
                     <a class="btn btn-outline-secondary" href="../lista/0-cadastro.php" role="button">Criar Lista </a>                        
                        </td></tr>
            </table>
                    </div>

                    <?php

                }
                 ?>
                 </div>
                 <div class="lista">
                     <h2>Veja suas listas!</h2>
                     <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Titulo</th>
                                                                          
                                        <th scope="col">ver</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                           
                    <?php
                        $lista = mysqli_query($banco_de_dados,"select * from lista where usuario_cad=$id");
                        $num  = mysqli_num_rows($lista);
                        if($num > 0)
                        {
                         $lista = mysqli_fetch_all($lista,MYSQLI_ASSOC);
                         foreach($lista as $registro)
                         {?>
                                <tr>
                                    <td><?=$registro['id']?></td>
                                    <td><?=$registro['nome']?></td>
                                   
                                    <td><a href="../lista/1-mostra.php?idl=<?=$registro['id']?>">Visualizar</a></td>
                                </tr>
                        <?php }   
                        }else{
                            echo "Você não tem nenhuma lista em seu Registro!<br>";
                        }                      
                     ?>
                     </tbody>
                 </table>
                     <a class="btn btn-outline-secondary" href="../lista/0-cadastro.php" role="button">Criar Lista </a>


                 </div>
     
       
            </center>
 
            </main>
    </section>

   <footer class="espaço">
       
       <div class="final">
            <img src="img/unip.png" style="padding-bottom: 20px">
            <img src="img/logoawcs.png" class="awcs">
            <img src="img/if.png" alt="">
       </div>

   </footer>
   <script src="main.js"></script>
</body>
</html>