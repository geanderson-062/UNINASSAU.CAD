<?php

//inscluindo arquivo de conexao
include "../conexao.php";

//criando vareaveis para editar
$id = $_POST ['id'];
$usuarioVST= $_POST ['usuarioVST'];
$setorVST= $_POST ['setorVST'];
$escolaVST= $_POST ['escolaVST'];
$alunosVST= $_POST ['alunosVST'];
$conteudoVST= $_POST ['conteudoVST'];
$professorVST= $_POST ['professorVST'];


//pegando vareaveis e atualizando os dados inserindo nelas 
$sql3= "UPDATE `visitas` SET `usuarioVST`= '$usuarioVST',`setorVST`='$setorVST',
`escolaVST`='$escolaVST',`alunosVST`='$alunosVST',`conteudoVST`='$conteudoVST',
`professorVST`='$professorVST',`id`='$id' 
WHERE id=$id";

//aviso se foi atualizado ou nao 
if (mysqli_query($conexao , $sql3)) {

    mensagem("$nome, Alterado com sucesso" , 'success');
}else {

    mensagem("$nome, NÃO Alterado com sucesso" , 'danger');
}


?>