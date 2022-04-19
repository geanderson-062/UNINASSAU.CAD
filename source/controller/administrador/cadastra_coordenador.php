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
$nomeCDN= $_POST ['nomeCDN'];
$cpfCDN= $_POST ['cpfCDN'];
$telefoneCDN= $_POST ['telefoneCDN'];
$senhaCDN= $_POST ['senhaCDN'];
$tipoCDN= $_POST ['tipoCDN'];

///inserindo valores na tabelda
$sql= "INSERT INTO `coordenador`( `cpfCDN`, `nomeCDN`, `telefoneCDN`, `senhaCDN`, `tipoCDN`) 
VALUES ('$cpfCDN','$nomeCDN','$telefoneCDN','$senhaCDN','$tipoCDN')";

if (mysqli_query($conexao , $sql)) {

    mensagem("$nomeCDN, cadastrado com sucesso" , 'success');

}else {

    mensagem("$nomeCDN, NÃO cadastrado com sucesso" , 'danger');

}


?>
</body>
</html>