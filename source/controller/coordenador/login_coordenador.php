<?php

include "../conexao.php";

if (isset($_POST['cpfCDN'])) {
  $cpfCDN= $_POST ['cpfCDN'];
  $senhaCDN = $_POST ['senhaCDN']; 


$sql = "SELECT * FROM `coordenador` WHERE cpfCDN='$cpfCDN'AND senhaCDN= '$senhaCDN'";

if ($result = mysqli_query($conexao, $sql)){
$num_resgitros = mysqli_num_rows($result);
if ($num_resgitros ==1) {
  $linha= mysqli_fetch_assoc($result);
  if (($cpfCDN==$linha['cpfCDN']) and ($senhaCDN==$linha['senhaCDN'])) { 
    session_start();
    $_SESSION['cpfCDN']= "Vivi";  
    header("location: dashboard_coordenador.php");
  
    } else {
  
      echo"Login inválido";
    }
}else {

   echo"Login ou senha não foram encontrados ou inválido.";
  }
 } else {echo "Nenhum resultado do banco";}
}


?>