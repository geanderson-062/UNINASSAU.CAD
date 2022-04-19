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

include "../conexao.php";

$idCDN = $_POST ['idCDN'];
$nomeCDN= $_POST ['nomeCDN'];





$sql2= "DELETE FROM `coordenador` WHERE  idCDN=$idCDN" ;


if (mysqli_query($conexao , $sql2)) {

    mensagem("$nomeCDN, Excluido com sucesso" , 'success');
}else {

    mensagem("$nomeCDN, NÃO Excluido com sucesso" , 'danger');
}
?>
</body>
</html>