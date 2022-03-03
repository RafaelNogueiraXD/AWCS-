<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="../jquery.js"></script>
    <link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
    include '../banco/conexao.php';
    include '../funcoes.php';
    session_start();
    login();
    if (isset($_GET['nome'])) {
        $nome = $_GET['nome'];
        $desc = $_GET['desc'];
        $hora = $_GET['hora'];
        $id = $_SESSION['id'];
        mysqli_query($banco_de_dados,"insert into lista values (default,'$nome','$desc','$hora','null','$id')") or exit("Erro!");
    }else{
        $idl = $_GET['idl'];
        $busca = mysqli_query($banco_de_dados,"select * from lista where id=$idl");
        $arrayl= mysqli_fetch_assoc($busca);
    }
   
    $pro = mysqli_query($banco_de_dados,"select * from produto ");
    $array = mysqli_fetch_all($pro,MYSQLI_ASSOC);
    //valor médio de cada produto

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
        <div style="text-align:center">
            <h3>Lista de <?=$arrayl['nome']?></h2>
            <h4>selecione os Produtos que Deseja inserir!</h3>

            <div class="cab_da_tab">
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
           
            <div id="tabelasq" class='ts'>
            <p style="color: grey">Resultado da pesquisa</p>
                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Valor(Médio)</th>                                    
                                        <th scope="col">Inserir</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbodi">

                                    </tbody>
                 </table>
            </div>
            
            <div class="tabela" id="tabelap">    
                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Valor(Médio)</th>                                    
                                        <th scope="col">Inserir</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                     
                              
                           
                                <?php
                         
                                    foreach ($array as  $registro) {
                                      //  foreach ($registro as $key => $value) {
                                            ?>
                                             <tr>
                                            <td><?= $registro['nome']?></td>
                                            <td><?= $registro['Tipo']?></td>
                                            <td><?php 
                                                        $idp = $registro['id'];
                                                        $produtos = mysqli_query($banco_de_dados,"select idproduto from fornecer where idproduto=$idp");
                                                        $linhas = mysqli_num_rows($produtos);
                                                        if ($linhas != 0) {
                                                                $ar = mysqli_fetch_assoc($produtos);
                                                                $mostra = valorM($banco_de_dados,$ar['idproduto']);
                                                                
                                                                foreach ($mostra as $valor) {
                                                                    echo number_format($valor,2)." R$";
                                                                }$linhas = mysqli_num_rows($produtos);   
                                                        }else{
                                                            echo "Não possui valor";
                                                        }

                                                        
                                                            ?> </td>
                                            <td><a href="3-insere.php?idp=<?=$registro['id']?>&&idl=<?=$idl?>">Inserir</a></td>
                                            </tr>
                                           <?php
                                     //   }
                                    }
                                ?>
                            
                                </tbody>
                        </table>
          
                     </div>  
                     <center>
                     <a style="text-align:center" class="btn btn-primary" href="1-mostra.php?idl=<?=$idl?>" role="button">Proxima Etapa!</a>
                     </center>
      
</section>
   <footer class="espaço">
       
       <div class="final">
            <img src="../pag/img/unip.png" style="padding-bottom: 20px">
            <img src="../pag/img/logoawcs.png" class="awcs">
            <img src="../pag/img/if.png" alt="">
       </div>

   </footer>
   <script>
   $("#tabelasq").hide();
   $(function(){
        $("form#formP").submit(function(){
        $.ajax({
            type: 'POST',
            url: 'pesquisa2.php',
            data: {
                pesquisa:  $('input#palavra').val() // $('input#pesquisa').val()
            }
        }).done(function(e){
            $("#tabelasq").show(),
            $("#tbodi").empty().html(e),
            $("#tabelap").hide();
        });
            return false;
        })
});
   </script>
</body>
</html>