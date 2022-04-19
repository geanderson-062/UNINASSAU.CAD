<?php

include "../conexao.php";

if (isset($_POST['cpfADM'])) {
  $cpfADM= $_POST ['cpfADM'];
  $senhaADM = $_POST ['senhaADM']; 

$sql = "SELECT * FROM `administrador` WHERE cpfADM='$cpfADM'AND senhaADM= '$senhaADM'";

if ($result = mysqli_query($conexao, $sql)){
  $num_resgitros = mysqli_num_rows($result);
     if ($num_resgitros ==1) {
     $linha= mysqli_fetch_assoc($result);
       if (($cpfADM==$linha['cpfADM']) and ($senhaADM==$linha['senhaADM'])) { 
       session_start();
       $_SESSION['cpfADM']= "Vivi";  
       header("location: dashboard_adm.php");
  
       } else {
  
       //echo"Login inválido";

       echo  "<script>
      
       alert('Login inválido');
       window.location='tela_de_login_adm.php';
      
       </script>";
     
    }
 }    
      else {

      //echo"Login ou senha não foram encontrados ou inválido.";

      echo  "<script>
      
      alert('Login ou senha não foram encontrados ou inválido.');
      window.location='tela_de_login_adm.php';
      
      </script>";

  }
 }

      else {
   
      //echo "Nenhum resultado do banco";

      echo  "<script>
      
      alert('Nenhum resultado do banco');
      window.location='tela_de_login_adm.php';
      
      </script>";
   
   }
}

?>