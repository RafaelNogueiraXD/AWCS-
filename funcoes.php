<?php
include 'banco/conexao.php';

function login()
{
    if(isset($_SESSION['logado'])){
        $log = $_SESSION['logado'];
        if($log == 1)
    {
        
    }else{
        header("Location: ../login/login.html");
        
    }
}else{
    header("Location: ../login/login.html");
}
    
    
}

function valorM($banco,$id)
{
    $valorM = mysqli_query($banco,"select AVG(valor) from fornecer where idproduto=$id") or false;
    $valorM = mysqli_fetch_assoc($valorM);
    return $valorM;
}
    
function pessoa()
{
    foreach ($_SESSION as $key => $value) {
        if($key == 'logado' || $key == 'id')
        {}
        else{echo "$key : $value <br>";}
    }
}
/*function login($x){

    if($x == 1 ){}else{header("Location: login/login.html");}    
}*/

function cargo()
{
    
$cargo = $_SESSION['cargo'];
if ($cargo == 'Moderador' || $cargo == 'Administrador' || $cargo == 'Gerenciador')
{echo "
    <a href='cd2/empresa.html'>Cadastre a empresa</a> <br>
    <a href='cd2/produto.php'>Cadastre o produto</a> <br>
    ";
    if ($cargo == 'Administrador' || $cargo == 'Gerenciador')
        {
            echo"
            <a href='cadastro/cadastro.html'>Cadastre um Usuario</a> <br>";
        }
}
}

function rodape(){
echo "<div class='rod'></div>";
}



?>