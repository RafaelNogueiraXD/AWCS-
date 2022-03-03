<html>
    <head> 
    <title>AWCS</title>
    <script src="../jquery.js"></script>
    <link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    </head>
    <style>
            table{width:500px; height:500px; text-align:center}
            .manipula{ text-align:center}
           
    </style>
    <header>       <div class="cabes">
               <a href="../pag/pagina.php"> <img src="../pag/img/logoawcs.png" class="awcs"></a>
            <ul>
            <li><h3><a href="0-empresa.php"><b> Empresas</a></b></h3></li>
                <li><h3><a href="../produto/0-prod.php"><b>Produtos</b></a></h3></li>
                <li><h3><a href="../usuarios/1-usuarios.php"><b>Usuários</b></a></h3></li>
                <li><h3><a href="../lista/0.1mostra.php"><b class="links_topo">Listas</b></a></h3></li>
                <li><h3><a href="../about.php"><b class="links_topo">Sobre Nós</b></a></h3></li>
        </ul>
        <div class="sair">               
                <a href="../login/logout.php"><div class="sair-1"></div></a> 
        </div>
    </div>

</header>
    
    <?php
    include '../banco/conexao.php';
    session_start();
    include '../funcoes.php';
    login();
    $id= $_GET['id'];
  
    $busca = mysqli_query($banco_de_dados,"select * from empresa where id='$id'");
    $array = mysqli_fetch_assoc($busca);
    $nome = $array['nome'];
    $ide = $array['id'];
    $produtos = mysqli_query($banco_de_dados,"select * from fornecer where idempresa = $ide");
    $produtos = mysqli_fetch_all($produtos,MYSQLI_ASSOC);
 
    ?>
                 <div class="con1">
                    <table border="1">
                                    <?php
                                        echo "<h1>$nome</h1>";
                                        foreach ($array as $key => $value)
                                        {
                                            if($key == 'id' || $key =='Usuario'|| $key =='Resumo')
                                            {
                                                if( $key =='Resumo')
                                                {
                                                    $resumao = $value;
                                                }
                                            }else{
                                            echo "<tr><td>$key</td> <td>$value</td> </tr>";
                                            }
                                        }
                                        if($_SESSION['cargo'] != 'Membro'){
                                        echo "<tr><td><a href='deleta.php?id=$id'>Excluir</a></td>
                                                <td><a href='2-editare.php?id=$id'>Editar</a></td>
                                            </tr>";}
                                    ?>
        
                    </table>
                </div>
                <div class="con2">
                    <h2>Produtos Cadastrados</h2>
                        <table class="table">
                            <thead class="thead-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Valor</th>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($produtos as $registro) {
                                        $idp = $registro['idproduto'];
                                        $seleciona = mysqli_query($banco_de_dados,"select id,nome from produto where id=$idp");
                                        $arp = mysqli_fetch_assoc($seleciona);
                        
                            
                                ?>
                            
                                <tr>
                                <th scope="row"><?= $arp['id']?></th>
                                <td><?= $arp['nome']?></td>
                                <td><?= $registro['valor']?></td>
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                        
                        </table>
                        <a class="btn btn-outline-secondary" href="../fornecer/0.1fornece.php?id=<?=$array['id']?>" role="button">Atribuir Item há empresa</a>
                
                    </div>
        </div>
     

    <div class="resumoemp">
        <h1>Resumo da Empresa</h1>
        <?= $resumao?>
    </div>
<footer>
       <div class="final">
            <img src="../pag/img/unip.png" style="padding-bottom: 20px">
            <img src="../pag/img/logoawcs.png" class="awcs">
            <img src="../pag/img/if.png" alt="">
       </div>

   </footer>

</script>
</html>