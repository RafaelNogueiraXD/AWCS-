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
    $v = 0;
    
    if(isset($_GET['idl'])){
        $idl = $_GET['idl'];
        $busca = mysqli_query($banco_de_dados,"select * from lista where id=$idl");
        $array = mysqli_fetch_assoc($busca);
    }
    
    if(isset($_GET['qtd']))
    {
        $qtd = $_GET['qtd'];
        $idp = $_GET['idp'];
        $produtos = mysqli_query($banco_de_dados,"select idproduto from fornecer where idproduto=$idp");
         $linhas = mysqli_num_rows($produtos);
           if ($linhas != 0) {
                        $ar = mysqli_fetch_assoc($produtos);
                        $mostra = valorM($banco_de_dados,$ar['idproduto']);
               
                            if($mostra == true){                                             
                                foreach ($mostra as $valor) {
                                        $v = $valor;
                                }
                            }else{$v = 0;}
            }
           
            $v = $v * $qtd;
            
            $pq = mysqli_query($banco_de_dados,"UPDATE  itens set valortotal=$v where idproduto=$idp and quantidade=$qtd") or exit("erro");
           //header("Location: 1-mostra.php?idl=$idl");
        }
        
        $novott = mysqli_query($banco_de_dados,"select SUM(valortotal) from itens where idlista=$idl");
        $mostrav = mysqli_fetch_assoc($novott);
        $num_linha1 = mysqli_num_rows($novott); 
        $novott = mysqli_query($banco_de_dados,"select SUM(quantidade) from itens where idlista=$idl");
        $mostrav2 = mysqli_fetch_assoc($novott);
        $num_linha2 = mysqli_num_rows($novott); 

    
   
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
        <div style="text-align:center;margin-top:20px">
            <h3>Lista de <?=$array['nome']?></h2>
         
            </div>
            
              <div class='con1'>
                  <h4>Dados da lista</h4>
                  <ul>
                <li style="float-left" class="list-group-item">Titulo: <?=$array['nome']?></li>
                <li class="list-group-item">Data de Registro: <?=$array['datahora_registro']?></li>
                <li class="list-group-item">Data de Publicação: <?php 
                                                            if ($array['Divulga'] == '0') {
                                                               ?>
                                                              <a class="btn btn-outline-secondary" href="6-publica.php?id=<?= $idl?>">Publicar</a>
                                                               <?php
                                                            }else{ echo $array['datahora_publicacao'];} ?></li>
                <li class="list-group-item">Quantidade de Produtos:<?php
                                                            
                                                                    foreach($mostrav2 as $values){
                                                                        if ($values == '') {
                                                                    echo "  Não possui Unidade disponivel";
                                                                
                                                                        }else{
                                                                    
                                                                        echo " $values unidades";
                                                                    }} 
                                                              ?></li>
                <li class="list-group-item">Valor Total: <?php
                                                            if (isset($mostrav)) {
                                                             
                                                                foreach($mostrav as $values){
                                                                    if ($values == '') {
                                                                        echo "Não possui valor total disponivel";
                                                                    }else{
                                                                    echo "$values R$";
                                                                    }
                                                                }  
                                                            }else{
                                                                
                                                            }
                                                            
                                                            ?></li>
                                                            <?php
                                                             if($_SESSION['cargo'] != 'Membro'){
                                                                 ?>
                 <li class="list-group-item">Desfazer Lista: 
                        <a class="btn btn-outline-secondary" href="5-desfazer.php?idl=<?= $idl?>" role="button">Desfazer </a>
                                                            </li>
                                                            <?php
                                                             }
                                                             ?>
            </ul>

              </div>
              <div class='con3'>
                  <h4>Produtos na Lista</h4>
                  <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Quatidade</th>                                    
                                        <th scope="col">Valor(U)</th>                                    
                                        <th scope="col">Valor(T)</th>                                    
                                        <th scope="col">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                     
                              
                                
                                <?php
                                        //segunda parte
                                        $busca = mysqli_query($banco_de_dados,"select * from itens where idlista=$idl");
                                        $aritens = mysqli_fetch_all($busca,MYSQLI_ASSOC);
                                      
                                         
                                        foreach ($aritens as $registro) {
                                            $idproduto =$registro['idproduto'];
                                            $prod2 = mysqli_query($banco_de_dados,"select * from produto where id=$idproduto");
                                            $prod2 = mysqli_fetch_assoc($prod2);
                                            $uni = $registro['valortotal']/$registro['quantidade'];
                                            ?>
                                            <tr>
                                                <td><?=$prod2['nome']?></td>
                                                <td><?=$registro['quantidade']?></td>
                                                <td><?php 
                                                        echo number_format($uni,2)."R$";
                                                        ?>
                                                </td>
                                                <td><?php
                                                  echo number_format($registro['valortotal'],2)."R$";

                                                  ?></td>
                                                <td><a href="../produto/1-prod.php?id=<?=$registro['idproduto']?>">Visualizar</a> -- <a href="4-excluir.php?idi=<?=$registro['id']?>&&idl=<?=$idl?>">Excluir</a></td>
                                               
                                            </tr>
                                            <?php            
                                        }
                                ?>
                            
                                </tbody>
                        </table>
                        <a class="btn btn-outline-secondary" href="2-insere.php?idl=<?= $idl?>" role="button">Inserir Itens </a>
              </div>
            </div>
        <div class="resumoemp">
        <h1>Resumo</h1>
            <?=$array['descricao']?>
                                        
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

