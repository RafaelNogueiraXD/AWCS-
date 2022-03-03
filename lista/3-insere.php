<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <title>Document</title>
</head>
<?php
    include '../banco/conexao.php';
    session_start();
    include '../funcoes.php';
    login();
    $idp = $_GET['idp'];
    if(isset($_GET['idl'])){
            $idl = $_GET['idl'];
            
            $n = mysqli_query($banco_de_dados,"select * from lista where id=$idl");
            $n = mysqli_fetch_assoc($n);
            $n=$n['nome'];
    }else{
        $n = mysqli_query($banco_de_dados,"select * from lista");
        $n = mysqli_fetch_all($n,MYSQLI_ASSOC);
        $idl = "zerado";
        
}
    
    $nome = mysqli_query($banco_de_dados,"select * from produto where id=$idp");
    $nome = mysqli_fetch_assoc($nome);
    if(isset($_GET['qtd']))
    {
       $idl= $_GET['idl'];
        $qtd = $_GET['qtd'];
     mysqli_query($banco_de_dados,"insert into itens values(default,'$qtd','0','$idp','$idl')");
     header("Location: 1-mostra.php?idl=$idl&&qtd=$qtd&&idp=$idp");
        
    }
   
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
                <main>
                <div class="centraliza">
                <center>
                    <h3>Coloque a Quantidade de <?=$nome['nome']?> </h3>
                    <table>
                        <form action="">
                        <tr>
                            <td>Lista</td>
                            <td>
                            <select  class="form-control" name="idl" id="" required>
                            <?php
                                if($idl  != "zerado" )
                                {
                                    ?>
                                    <option value="<?=$idl?>"><?php
                                    echo $n;
                                    ?></option>
                          
                                <?php
                                }else{?>
                                    <option value="">Escolha a lista!</option>
                                
                                <?php
                                    foreach($n as $arriado){           
                                    ?>
                                    <option value="<?=$arriado["id"]?>"><?=$arriado["nome"]?></option>
                               <?php        
                            }
                        }
                            ?>
                                  </select></td>
                        </tr>
                            <tr>
                                <td><label for="">Quantidade</label></td>
                                <td><input class="form-control" type="number" name='qtd' required></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="idp"value="<?=$idp?>" required></td>
                                <td><input class="btn btn-primary" type="submit" value="Inserir!" required></td>
                            </tr>
                        </form>
                    </table>
                
                    </center>
                </div>
                </main>
        </section>


<footer class="espaço">
       
       <div class="final">
            <img src="../pag/img/unip.png" style="padding-bottom: 20px">
            <img src="../pag/img/logoawcs.png" class="awcs">
            <img src="../pag/img/if.png" alt="">
       </div>
</footer>

</body>
</html>