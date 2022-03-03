<?php
$banco = new mysqli("localhost","root","","awcs");
$palavra = $_POST['pesquisa'];

$seleciona = $banco->query("SELECT * FROM empresa where nome like '%$palavra%' or id like '%$palavra%' or CNPJ='$palavra'");

while($row  = $seleciona->fetch_assoc())
{?>
<tr>
    <td><?= $row['id']?></td>
    <td><?= $row['nome']?></td>
    <td><?= $row['localiza']?></td>
    <td><a href="1-empresas.php?id=<?= $row['id']?>">Visualizar</a></td>
</tr>
<?php
}
?>