<?php

//incluindo a conexao
include "../conexao.php";//incluindo a conexao 

//criando vareaveis para armazenar dados digitados no input
$usuarioVST= $_POST ['usuarioVST'];
$setorVST= $_POST ['setorVST'];
$escolaVST= $_POST ['escolaVST'];
$alunosVST= $_POST ['alunosVST'];
$conteudoVST= $_POST ['conteudoVST'];
$professorVST = $_POST ['professorVST'];

///inserindo valores na tabelda
$sql= "INSERT INTO `visitas`(`usuarioVST`, `setorVST`, `escolaVST`, `alunosVST`, `conteudoVST`, `professorVST` ) 
VALUES ('$usuarioVST','$setorVST','$escolaVST','$alunosVST','$conteudoVST','$professorVST')";

if (mysqli_query($conexao , $sql)) {

    mensagem("$usuarioVST, cadastrado com sucesso" , 'success');

}else {

    mensagem("$usuarioVST, NÃO cadastrado com sucesso" , 'danger');

}


?>