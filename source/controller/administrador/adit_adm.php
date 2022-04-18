<?php

//incluindo arquivo de conexao 
include "../conexao.php";

//pegando o id 
$idADM= $_GET ['idADM']?? '';

//selecionando a tabela 
$sql= "SELECT * FROM `administrador` WHERE idADM = $idADM";

//colocando vareaveis para editar
$dados = mysqli_query($conexao , $sql);
$linha = mysqli_fetch_assoc($dados);

?>

<!DOCTYPE html>
<html lang="PTBR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar dados do Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../../../resources/css/style.css">

    <!--favicon-->

    <link rel="apple-touch-icon" sizes="57x57" href="../../../resources/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../../resources/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../../resources/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../resources/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../../resources/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../../resources/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../../resources/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../../resources/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../../resources/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../../../resources/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../resources/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../../resources/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../resources/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../../resources/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../../resources/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
 
    <!--favicon-->

</head>
<body>

     <nav class="navbar navbar-light corPrimaria">
         <div class="container-fluid">
           <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-2 text-white" href="#">
              <img src="../../../resources/img/imgnavbar.png" alt="" width="50" height="50">
             Uninassau </a>
         </div>
     </nav>

    <div>
        <br>
        <br>
        <br>
        <br>
    </div>

      <div>
        <p class="fs-2 text-center"> Atualizar dados do Administrador</p>
      </div>

     
      <section class="container" style="max-width: 360px;">
        <form method="post" action="adm_edit_script.php">
            
          <div class="mb-3">
            <label for="nomeADM" class="form-label">Nome:</label>
            <input required name="nomeADM" type="text" class="form-control" id="nomeADM" aria-describedby="emailHelp" placeholder="Ex: José Marcones Lira" autofocus value="<?php echo $linha ['nomeADM'];?>">    
          </div>
          <div class="mb-3">
            <label for="telefoneADM" class="form-label">Telefone:</label>
            <input required name="telefoneADM" type="text" class="form-control" id="telefoneADM" aria-describedby="emailHelp" placeholder="Ex: 89196517" value="<?php echo $linha ['telefoneADM'];?>">    
          </div>
          <div class="mb-3">
            <label for="cpfADM" class="form-label">Cpf:</label>
            <input required name="cpfADM" type="text" class="form-control" id="cpfADM" aria-describedby="emailHelp" placeholder="Ex: 12220840409" value="<?php echo $linha ['cpfADM'];?>">
          </div>
          <div class="mb-3">
            <label for="senhaADM" class="form-label">Senha:</label>
            <input required name="senhaADM" type="text" class="form-control" id="senhaADM" aria-describedby="emailHelp" placeholder="Ex: 123marcones321" value="<?php echo $linha ['senhaADM'];?>">
          </div>
          <div class="mb-3">
            <label for="tipoADM" class="form-label">Tipo:</label>
            <input required name="tipoADM" type="text" class="form-control" id="tipoADM" aria-describedby="emailHelp" placeholder="Ex: Administrador " value="<?php echo $linha ['tipoADM'];?>">
          </div>
         
          <div class="d-grid gap-2 col-6 mx-auto">

            <input type="submit" class="btn btn-primary"  name="submit" id="submit"  value="Alterar">
            <input type="hidden" name="idADM" value="<?php echo $linha ['idADM'];?>" >

             
          </div>
            
          </form>
      </section>

    <div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
    </div>
 
  <footer class="py-3 my-4 corPrimaria">
 
    <p class="text-center text-white">© 2022 Uninassau Company, Inc</p>
    <p class="text-center text-white">Sistema web desenvolvido por Geanderson Ferreira & Viviane Raquel</p>

  </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>