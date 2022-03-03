<?php
$banco = new mysqli("localhost","root","","awcs");
$palavra = $_POST['pesquisa'];

$seleciona = $banco->query("SELECT * FROM lista where nome like '%$palavra%' and divulga=1 or id like '%$palavra%' and divulga=1");

while($row  = $seleciona->fetch_assoc())
{?>
<tr>
    <td><?= $row['id']?></td>
    <td><?= $row['nome']?></td>
    <td><?= $row['datahora_publicacao']?></td>
    <td><a href="1-mostra.php?idl=<?= $row['id']?>">Visualizar</a></td>
</tr>
<?php
}
?>