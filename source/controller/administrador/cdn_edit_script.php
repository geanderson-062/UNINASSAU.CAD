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

    mensagem("$nomeCDN, Alterado com sucesso" , 'success');
}else {

    mensagem("$nomeCDN, NÃO Alterado com sucesso" , 'danger');
}


?>
</body>
</html>
