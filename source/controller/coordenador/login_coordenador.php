<?php
session_start();
include ('../conexao.php');//incluidno arquivo de conecxao do banco de dados

$cpfCDN = $_POST['cpfCDN'];
$senhaCDN = $_POST['senhaCDN'];

//verificar se o login está certou ou não 
$query = "SELECT * FROM coordenador where cpfCDN = $cpfCDN and senhaCDN = md5($senhaCDN)";

//executando a aquery montada acima
$result = mysqli_query($conexao, $query);

//passando result como parametro
$row = mysqli_num_rows($result); 

if($row > 0) {

  //se o usuario tiver logado va para dashboard
  $_SESSION['usuario'] = $cpfCDN;//verificando se tao igual
  header('Location: dashboard_coordenador.php');
  exit();//finalizando operação

}
else{

  //caso não estivel logado va para login novamente
  $_SESSION['nao_autenticado'] = true;//quando o usuario for invalido
  header('Location: tela_de_login_coordenador.php');
  exit();//finalizando operação

}

?>