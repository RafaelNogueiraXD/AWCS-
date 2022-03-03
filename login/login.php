<?php
include '../banco/conexao.php';
        session_start();

        $email = $_GET['email'];
        $senha = $_GET['senha'];

        $busca=mysqli_query($banco_de_dados,"select * from usuario where email='$email' and senha='$senha'");
        $novo=mysqli_num_rows($busca);
        
        
        $linha = mysqli_fetch_assoc($busca);

        if($novo == 1)
        {
            $_SESSION['logado'] = 1;
            $_SESSION['nome'] = $linha ['nome'];
            $_SESSION['email'] = $email ;
            $_SESSION['id'] = $linha['id'];
            $_SESSION['cargo'] = $linha['cargo'];
            session_encode();
            header("Location: ../pag/pagina.php");


        }else {header("Location: login.html");}




?>