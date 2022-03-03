<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="stylesheet" href="../atuali/main.css">
<link rel="stylesheet" href="fornece.css">
    <link rel="stylesheet" href="../atuali/main2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fornecer</title>
</head>
<?php
include '../banco/conexao.php';
session_start();
include '../funcoes.php';
    login();
$idu = $_SESSION['id'];
$ide = $_GET['id'];
$select = mysqli_query($banco_de_dados,"select * from empresa where id=$ide");
$array = mysqli_fetch_assoc($select);
$select2 = mysqli_query($banco_de_dados,"select * from produto");
$array2 = mysqli_fetch_all($select2,MYSQLI_ASSOC);
if(isset($_GET['produto']))
{
    $empresa = $array['id'];
    $produto = $_GET['produto'];
    $valor = $_GET['valor'];
    $query = mysqli_query($banco_de_dados,"select  * from fornecer where idempresa=$empresa and idproduto=$produto");
    $linhas = mysqli_num_rows($query);
    if ($linhas > 0) {
        echo "Essa produto já foi inserido na empresa !";
    }else{
        $insere = mysqli_query($banco_de_dados,"insert into fornecer values(default,'$empresa','$produto','$valor')") or exit("Erro : ");
        print_r($insere);
    header("Location: ../empredit/1-empresas.php?id=$ide");
        }
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
                <div class="fornece">
                    <h3>Relacione um Produto há empresa <?= $array['nome']?>!</h3>
                    <center>
                    <table>
                        <form action="0.1Fornece.php" method="GET">
                             <tr>
                                <td><label for="">Produto</label></td>
                                <td><select class="form-control" name="produto"required id="">
                                <option value="">Selecione um Produto</option>
                                    <?php
                                        foreach ($array2 as $registro) {    
                                        ?>
                                        <option value="<?= $registro['id']?>"><?= $registro['nome']?></option>
                                        <?php
                                    }
                                    ?>
                                </select></td>
                            </tr>
                            <tr>
                                <td><label for="">Valor</label></td>
                                <td><input class="form-control" type="number" name="valor" placeholder="Atribua um valor ao Produto"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="id" value="<?=$array['id']?>" required></td>
                            </tr>
                            <tr>
                                    <td><input type="reset"> </td>
                                    <td><input type="submit" value="Cadastrar!"></td>
                            </tr>
                        </form>
                    </table>
                    </center>
                </div>
            </main>
        </section>








</body>
</html>