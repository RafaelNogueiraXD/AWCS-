<?php
$banco = new mysqli("localhost","root","","awcs");
$palavra = $_POST['pesquisa'];

$seleciona = $banco->query("SELECT * FROM produto where nome like '%$palavra%' or id like '%$palavra%' or Tipo like '$palavra'");

while($row  = $seleciona->fetch_assoc())
{?>
<tr>
    <td><?= $row['id']?></td>
    <td><?= $row['nome']?></td>
    <td><?= $row['Tipo']?></td>
    <td><a href="1-prod.php?id=<?= $row['id']?>">Visualizar</a></td>
</tr>
<?php
}
?>