<?php

//incluindo a conexao
include "../conexao.php";

//criando vareaveis para armazenar dados digitados no input
$nomeADM= $_POST ['nomeADM'];
$cpfADM= $_POST ['cpfADM'];
$telefoneADM= $_POST ['telefoneADM'];
$senhaADM= $_POST ['senhaADM'];
$tipoADM= $_POST ['tipoADM'];

///inserindo valores na tabelda
$sql= "INSERT INTO `administrador`( `cpfADM`, `nomeADM`, `telefoneADM`, `senhaADM`, `tipoADM`) 
VALUES ('$cpfADM','$nomeADM','$telefoneADM','md5($senhaADM)','$tipoADM')";


if (mysqli_query($conexao , $sql)) {

    //mensagem("$nomeADM, cadastrado com sucesso" , 'success');

    echo "<script>alert('Cadastrado com sucesso!);</script>"; 
    header("location : dasboard_adm.php");

}else {

    mensagem("$nomeADM, NÃO cadastrado com sucesso" , 'danger');

}

Function mensagem ($texto , $tip) {

    echo"<div class='alert alert-$tip'  role='alert'>$texto</div>";

    }


?>