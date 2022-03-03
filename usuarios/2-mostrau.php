
<html>
    <head> 
    <title>AWCS</title>
    <link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
     </head>
    <style>
           table{
               width:400px;
               height:500px;
               text-align:center
           }
    </style>
<body>
<header>       <div class="cabes">
               <a href="../pag/pagina.php"> <img src="../pag/img/logoawcs.png" class="awcs"></a>
            <ul>
            <li><h3><a href="../empredit/0-empresa.php"><b>Empresas</b></a></h3></li>
                <li><h3><a href="../produto/0-prod.php"><b>Produtos</b></a></h3></li>
                <li><h3><a href="1-usuarios.php"><b>Usuários</b></a></h3></li>
                <li><h3><a href="../lista/0.1mostra.php"><b class="links_topo">Listas</b></a></h3></li>
                <li><h3><a href="../about.php"><b class="links_topo">Sobre Nós</b></a></h3></li>
        </ul>
        <div class="sair">               
                <a href="../login/logout.php"><div class="sair-1"></div></a> 
        </div>
    </div>

</header>   

    <?php
    session_start();
                include '../banco/conexao.php';
                include '../funcoes.php';
    login();
                $id= $_GET['id'];
            
                $busca = mysqli_query($banco_de_dados,"select * from usuario where id='$id'");
                $array = mysqli_fetch_assoc($busca);
                $nome = $array['nome'];
            
                ?><center>
                <table border="1">
                <?php
                echo "<h1>$nome</h1>";
                foreach ($array as $key => $value)
                {
                    if($key == 'id' )
                    {}else{
                    echo "<tr><td>$key</td> <td>$value</td> </tr>";
                    }
                }
                if($_SESSION['cargo'] != 'Membro'){
                echo "<tr><td><a href='deleta.php?id=$id'>Excluir</a></td>
                        <td><a href='3-usup.php?id=$id'>Editar</a></td>
                    </tr>";}
            ?>
            </center>
            </table>

            <footer>
       <div class="final">
            <img src="../pag/img/unip.png" style="padding-bottom: 20px">
            <img src="../pag/img/logoawcs.png" class="awcs">
            <img src="../pag/img/if.png" alt="">
       </div>

   </footer>

</body>
</html>