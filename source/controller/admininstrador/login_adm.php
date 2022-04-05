<?php

session_start();
include ('conexao_adm.php');//incluidno arquivo de conecxao do banco de dados

//pegando valores de cpf e senha e verificando se eles estão vazios 
if (empty($_POST['cpf']) || empty($_POST['senha']));{
  
    //se o cpf e senha estiver vazio direcione para 
    header('Location: tela_de_login_adm.php');
      exit();//encerrar operação
} 

//verificar se o sistema está recebendo um sql injection e protegendo o login
$cpf = mysqli_real_escape_string($conexao,$_POST['cpf']); 
$senha = mysqli_real_escape_string($conexao,$_POST['senha']); 

//verificar se o login está certou ou não 
$query = "SELECT usuario_id, login_adm FROM login_adm where cpf = '{$cpf}' and senha = md5('{$senha}')";

//executando a aquery montada acima
$result = mysqli_query($conexao, $query);

//passando result como parametro
$row = mysqli_num_rows($result); 

if($row == 1) {

  //se o usuario tiver logado va para dashboard
  $_SESSION['cpf'] = $cpf;//verificando se tao igual
  header('Location: dashboard_adm.php');
  exit();//finalizando operação

}
else{

  //caso não estivel logado va para login novamente
  $_SESSION['nao_autenticado'] = true;//quando o usuario for invalido
  header('Location: tela_de_login_adm.html');
  exit();//finalizando operação

}

?>