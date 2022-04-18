<?php

//se tentar entrar pela url sem o login vai redirecionar para index
//session_start();
if(!$_SESSION['usuario']) {

    header('Location: ../../../index.php');
    exit();
    
}