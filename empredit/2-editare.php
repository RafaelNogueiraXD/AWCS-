<html>
        <head>
        <link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
                <title>AWCS</title>
        </head>
        <style>
                table{}
</style>
        <?php
        session_start();
        include '../banco/conexao.php';
        include '../funcoes.php';
        login();
        $id = $_GET['id'];
        ?>
        <body>
                
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
   
   $busca = mysqli_query($banco_de_dados,"select * from empresa where id='$id'");
   $array = mysqli_fetch_assoc($busca);
   $nome = $array['nome'];

   ?><center>
           <h1><?= $array['nome']?></h1>
        <table border="0">
           <form action="3-editare2.php?id=<?=$id?>" method='GET'>
           <tr>
                <td><input class="form-control" type="text" maxlength="48" placeholder="<?= $array['nome'] ?>" name="nome"></td>
         </tr>
          <tr> 
              <td><input  class="form-control" type='text' maxlength='48' placeholder="<?= $array['localiza'] ?>" name='local' ></td>  
         </tr>
         <tr>
             <td><input class="form-control" type='numero' maxlength='14' name='cnpj' placeholder="<?= $array['CNPJ'] ?>" ></td>
        </tr>
        <tr>
             <td> <textarea  class="form-control" name='resumo' placeholder='Deseja Modificar?caso não, apenas deixe o campo em branco...' cols='60' rows='7'></textarea></td>
        </tr>
   
        <tr><td>   <input class="form-control" required type='checkbox' value="<?= $array['id']; ?>" name="id" ></td></tr>
        <tr><td><input class="form-control" type='submit' value='Editar!'></td></tr>  
        </center>
  </form>
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