<?php

include "../conexao.php";

$id = $_POST ['id'];
$usuarioVST= $_POST ['usuarioVST'];





$sql= "DELETE FROM `visitas` WHERE id=$id, idADM=$idADM , idCDN=$idCDN";


if (mysqli_query($conexao , $sql)) {

    mensagem("$nome, Excluido com sucesso" , 'success');
}else {

    mensagem("$nome, NÃO Excluido com sucesso" , 'danger');
}


?>