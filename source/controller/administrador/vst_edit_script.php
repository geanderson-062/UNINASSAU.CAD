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


    echo  "<script>
      
    alert('Alterado com sucesso');
    window.location='dashboard_VST.php';
   
    </script>";

    //mensagem("Visita Alterada com sucesso" , 'success');
}else {

    echo  "<script>
      
    alert('NÃO Alterado com sucesso');
    window.location='dashboard_VST.php';
   
    </script>";


   // mensagem(" Visita NÃO Alterada com sucesso" , 'danger');
}


?>

</body>
</html>