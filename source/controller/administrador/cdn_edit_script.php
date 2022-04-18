<?php

//inscluindo arquivo de conexao
include "../conexao.php";

//criando vareaveis para editar
$idCDN = $_POST ['idCDN'];
$nomeCDN= $_POST ['nomeCDN'];
$cpfCDN= $_POST ['cpfCDN'];
$telefoneCDN= $_POST ['telefoneCDN'];
$senhaCDN= $_POST ['senhaCDN'];
$tipoCDN= $_POST ['tipoCDN'];

//pegando vareaveis e atualizando os dados inserindo nelas 
$sql2= "UPDATE `coordenador` SET `idCDN`='$idCDN',`cpfCDN`='$cpfCDN',`nomeCDN`='$nomeCDN',`telefoneCDN`='$telefoneCDN',`senhaCDN`='$senhaCDN',`tipoCDN`='$tipoCDN'
 WHERE idCDN=$idCDN ";

//aviso se foi atualizado ou nao 
if (mysqli_query($conexao , $sql2)) {

    mensagem("$nome, Alterado com sucesso" , 'success');
}else {

    mensagem("$nome, NÃO Alterado com sucesso" , 'danger');
}


?>