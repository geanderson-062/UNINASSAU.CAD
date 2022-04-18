<?php

include "../conexao.php";

$idCDN = $_POST ['idCDN'];
$nomeCDN= $_POST ['nomeCDN'];





$sql2= "SELECT * FROM `coordenador` WHERE idCDN=$idCDN" ;


if (mysqli_query($conexao , $sql2)) {

    mensagem("$nome, Excluido com sucesso" , 'success');
}else {

    mensagem("$nome, NÃO Excluido com sucesso" , 'danger');
}