<?php
$banco = new mysqli("localhost","root","","awcs");
include '../funcoes.php'; 
$palavra = $_POST['pesquisa'];

$seleciona = $banco->query("SELECT * FROM produto where nome like '%$palavra%' or id like '%$palavra%' or Tipo like '$palavra'");

while($row  = $seleciona->fetch_assoc())
{?>
<tr>
    <td><?= $row['nome']?></td>
    <td><?= $row['Tipo']?></td>
    <td><?php
               $idp =  $row['id'];
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
            ?></td>    
    <td><a href="3-insere.php?idp=<?=$row['id']?>">Inserir</a></td>

</tr>
<?php
}
?>