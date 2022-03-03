<?php
session_start();
if ($_SESSION['logado'] == 1)
{
    session_start();
    session_destroy();
    session_start();
    $_SESSION['logado'] = 0;

    header("Location: login.html");    
}?>