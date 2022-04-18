<?php

//inscluindo arquivo de conexao
include "../conexao.php";

//criando vareaveis para editar
$idADM = $_POST ['idADM'];
$nomeADM= $_POST ['nomeADM'];
$cpfADM= $_POST ['cpfADM'];
$telefoneADM= $_POST ['telefoneADM'];
$senhaADM= $_POST ['senhaADM'];
$tipoADM= $_POST ['tipoADM'];

//pegando vareaveis e atualizando os dados inserindo nelas 
$sql= "UPDATE `administrador` SET `idADM`='$idADM',`cpfADM`='$cpfADM',`nomeADM`='$nomeADM',`telefoneADM`='$telefoneADM',`senhaADM`='$senhaADM',`tipoADM`='$tipoADM' 
WHERE idADM=$idADM";

//aviso se foi atualizado ou nao 
if (mysqli_query($conexao , $sql)) {

    mensagem("$nome, Alterado com sucesso" , 'success');
}else {

    mensagem("$nome, NÃO Alterado com sucesso" , 'danger');
}


?>