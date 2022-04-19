<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testando</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php

//incluindo a conexao
include "../conexao.php";//incluindo a conexao 

//criando vareaveis para armazenar dados digitados no input
$dataVST= $_POST ['dataVST'];
$usuarioVST= $_POST ['usuarioVST'];
$setorVST= $_POST ['setorVST'];
$escolaVST= $_POST ['escolaVST'];
$alunosVST= $_POST ['alunosVST'];
$conteudoVST= $_POST ['conteudoVST'];
$professorVST = $_POST ['professorVST'];

///inserindo valores na tabelda
$sql= "INSERT INTO `visitas`(`usuarioVST`, `setorVST`, `escolaVST`, `alunosVST`, `conteudoVST`, `professorVST`, `dataVST` ) 
VALUES ('$usuarioVST','$setorVST','$escolaVST','$alunosVST','$conteudoVST','$professorVST', '$dataVST')";

if (mysqli_query($conexao , $sql)) {

    mensagem("$usuarioVST realizou cadastrado de visita com sucesso" , 'success');

}else {

    mensagem("$usuarioVST, NÃO realizou cadastrado de visita com sucesso" , 'danger');

}


?>
</body>
</html>