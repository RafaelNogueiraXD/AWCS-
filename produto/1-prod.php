<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <title>AWCS</title>
    <style>
        .tabeladosp{
            text-align: center;
    margin-left: 8%;
    margin-right: 6%;
    border: 1px black solid;
    border-radius: 10px;
    /* height: 173px; */
    padding: 20px;
    box-shadow: 2px 2px 6px black;
    margin-top: 4%;

        }
        .tabeladosp table tbody td{
            height:100px
        }
    </style>
</head>
<style>
            table{width:500px;
             height:500px; 
             text-align:center}
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
          
           <center>
            <?php
    include '../banco/conexao.php';
    session_start();
    include '../funcoes.php';
    login();
    $id= $_GET['id'];
  
    $busca = mysqli_query($banco_de_dados,"select * from produto where id='$id'");
    $array = mysqli_fetch_assoc($busca);
    $nome = $array['nome'];
 
    ?>
                    <table border="1"><?php
                    echo "<h1>$nome</h1>";
                    foreach ($array as $key => $value)
                    {
                        if($key == 'id' || $key=='descricao' )
                        {}else{
                        echo "<tr><td>$key</td> <td>$value</td> </tr>";
                        }
                    }
                    if($_SESSION['cargo'] != 'Membro'){
                    echo "<tr><td><a href='deleta.php?id=$id'>Excluir</a></td>
                            <td><a href='2-prod.php?id=$id'>Editar</a></td>
                        </tr>";}
                ?>
  
   </table>
   

    <div class="resumoemp">
                <h1>Resumo</h1>
                <?=$array['descricao']?>
    </div>


    <div class="tabeladosp">
         <h2>Empresas que Oferecem esse produto</h2>
        
         <?php
            $pega = mysqli_query($banco_de_dados,"select e.id,e.nome,f.valor
            from empresa e 
            inner join produto p 
            inner join fornecer f 
            on e.id = f.idempresa and
            p.id=$id and p.id = f.idproduto;");
            $linhas = mysqli_num_rows($pega);
            if($linhas > 0 )
            {?>
                <table class="table table-hover">
                <thead class="thead-light">
                        <th scope="col">ID</th>
                        <th scope="col">Nome da empresa</th>
                        <th scope="col">Valor quem é vendido</th>
                        <th scope="col">Ver</th>
                    </thead>
                    <tbody id="tbodi">
            <?php
            $array = mysqli_fetch_all($pega,MYSQLI_ASSOC);
            foreach ($array as $empresa) {
                ?>
       <tr>
                    <td><?=$empresa["id"]?></td>
                    <td><?= $empresa["nome"]?></td>
                    <td><?= $empresa["valor"]?> R$</td>
                    <td><a href="../empredit/1-empresas.php?id=<?=$empresa["id"]?>">Visualizar</a></td>
                    </tr>
                <?php
            }
         ?>
                </tbody>
                </table>

                <?php
                }else{
                    echo "nenhuma empresa oferece esse produto";
                }?>
    </div>
</center>




   <footer>
       <div class="final">
            <img src="../pag/img/unip.png" style="padding-bottom: 20px">
            <img src="../pag/img/logoawcs.png" class="awcs">
            <img src="../pag/img/if.png" alt="">
       </div>

   </footer>
    
   
</body>
</html>