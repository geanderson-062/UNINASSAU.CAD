<?php

include "../conexao.php";

$idADM = $_POST ['idADM'];
$nomeADM= $_POST ['nomeADM'];





$sql= "DELETE FROM `administrador` WHERE idADM=$idADM" ;

if (mysqli_query($conexao , $sql)) {

    mensagem("$nome, Excluido com sucesso" , 'success');
}else {

    mensagem("$nome, NÃO Excluido com sucesso" , 'danger');
}