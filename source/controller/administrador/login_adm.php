<?php
session_start();
include ('../conexao.php');//incluidno arquivo de conecxao do banco de dados

$cpfADM = $_POST['cpfADM'];
$senhaADM = $_POST['senhaADM'];

//verificar se o login está certou ou não 
$query = "SELECT * FROM administrador where cpfADM = $cpfADM and senhaADM = md5($senhaADM)";

//executando a aquery montada acima
$result = mysqli_query($conexao, $query);

//passando result como parametro
$row = mysqli_num_rows($result); 

if($row > 0) {

  //se o usuario tiver logado va para dashboard
  $_SESSION['usuario'] = $cpfADM;//verificando se tao igual
  header('Location: dashboard_adm.php');
  exit();//finalizando operação

}
else{

  //caso não estivel logado va para login novamente
  $_SESSION['nao_autenticado'] = true;//quando o usuario for invalido
  header('Location: tela_de_login_adm.php');
  exit();//finalizando operação

}

?>