<?php
$banco = new mysqli("localhost","root","","awcs");
$palavra = $_POST['pesquisa'];

$seleciona = $banco->query("SELECT * FROM usuario where nome like '%$palavra%' or id like '%$palavra%' or email like '$palavra' or cpf='$palavra'");

while($row  = $seleciona->fetch_assoc())
{?>
<tr>
    <td><?= $row['id']?></td>
    <td><?= $row['nome']?></td>
    <td><?= $row['email']?></td>
    <td><a href="2-mostrau.php?id=<?= $row['id']?>">Visualizar</a></td>
</tr>
<?php
}
?>