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

    mensagem("$nomeADM, Alterado com sucesso" , 'success');
}else {

    mensagem("$nomeADM, NÃO Alterado com sucesso" , 'danger');
}



?>

</body>
</html>
