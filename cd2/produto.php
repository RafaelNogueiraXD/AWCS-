<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <meta charset="UTF-8">
    <title>Produto</title>
</head>
<style>
        .espaco{height:100px;width:20px}
</style>
<?php
include '../banco/conexao.php';
session_start();
include '../funcoes.php';
login();

?>
<body>
<header>       <div class="cabes">
               <a href="../pag/pagina.php"> <img src="../pag/img/logoawcs.png" class="awcs"></a>
            <ul>
                <li><h3><a href="../empredit/0-empresa.php"><b> Empresas</a></b></h3></li>
                <li><h3><a href="../produto/0-prod.php"><b class="links_topo">Produtos</b></a></h3></li>
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
                <h2>Produtos Cadastradas</h2> 
        <form action="implantap.php" method="GET">
        <table border="0">
            <tr>
                <td><label class="col-sm-2 col-form-label" for="Nome do Produto">Produto</label></td>
                <td><input required  class="form-control" type="text" maxlength="48" placeholder="Digite o nome do Produto" name="produto" id="Nome do Produto"></td>
            </tr>
            
            <tr>
                <td><label for="Tipo" class="col-sm-2 col-form-label">Tipo</label></td>
                <td><input required class="form-control" type="text" id="Tipo" maxlength="20" placeholder="digite o tipo do Produto" name="tipo"></td>
            </tr>
            <tr>
                    <td><label for="Descrição" class="col-sm-2 col-form-label">Descrição</label></td>
                    <td><textarea class="form-control" name="desc" id="Descrição" cols="30" rows="5"></textarea></td>
            </tr>
                 
           
        
            
            <tr>
                <td><input type="reset"></td>
                <td><input type="submit" value="cadastrar"></td>
            </tr>
        </table>
    </form>
    </center>
    
    <div class="espaco">
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