<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../atuali/main.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Listar</title>
</head>
<style>
        .lista{
            border:none;
            box-shadow:none;
            background-color:white;
        }
</style>
 
<?php
    include '../banco/conexao.php';
    session_start();
    include '../funcoes.php';
    login();
    
    if (isset($_GET['nome'])) {
        $nome = $_GET['nome'];
        $desc = $_GET['desc'];
       
        $hora = date('d-m-y H:i:s');
        $id = $_SESSION['id'];
        mysqli_query($banco_de_dados,"insert into lista values (default,'$nome','$desc',default,'$hora','null','$id')") or exit("Erro!");
        header("Location: ../pag/pagina.php");
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
                <div class="lista">
                    <h2>Faça sua lista!</h2>
                    <center>
                    <table>
                        <form action="0-cadastro.php" method='GET'>
                            <tr>
                                <td><label for="">Titulo</label></td>
                                <td><input class="form-control form-control-lg" type="text" name="nome" placeholder="Escreva o Titulo da Lista" required></td>
                            </tr>
                            <tr>
                                <td><label for="">Descrição</label></td>
                                <td><textarea  class="form-control"name="desc" id="" cols="30" rows="10" required></textarea></td>
                            </tr> 
                            <tr><td></td>
                                <td><input type="submit" class="btn btn-primary" value="Criar!"></td>
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
