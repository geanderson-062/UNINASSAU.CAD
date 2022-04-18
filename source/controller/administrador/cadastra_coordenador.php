<?php

//incluindo a conexao
include "../conexao.php";
//criando vareaveis para armazenar dados digitados no input
$nomeCDN= $_POST ['nomeCDN'];
$cpfCDN= $_POST ['cpfCDN'];
$telefoneCDN= $_POST ['telefoneCDN'];
$senhaCDN= $_POST ['senhaCDN'];
$tipoCDN= $_POST ['tipoCDN'];

///inserindo valores na tabelda
$sql= "INSERT INTO `coordenador`( `cpfCDN`, `nomeCDN`, `telefoneCDN`, `senhaCDN`, `tipoCDN`) 
VALUES ('$cpfCDN','$nomeCDN','$telefoneCDN','$senhaCDN','$tipoCDN')";

if (mysqli_query($conexao , $sql)) {

    mensagem("$nome, cadastrado com sucesso" , 'success');

}else {

    mensagem("$nome, NÃO cadastrado com sucesso" , 'danger');

}


?>