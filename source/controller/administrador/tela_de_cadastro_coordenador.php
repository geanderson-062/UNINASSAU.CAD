<!DOCTYPE html>
<html lang="PTBR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de coordenadores</title>
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
        <p class="fs-2 text-center">Cadastrar Coordenadores</p>
      </div>

      <section class="container" style="max-width: 360px;">
        <form method="post" action="cadastra_coordenador.php">

            <div class="mb-3">
              <label for="nomeCDN" class="form-label">Nome:</label>
              <input required name="nomeCDN" type="text" class="form-control" id="nomeCDN" aria-describedby="emailHelp" placeholder="Ex: José Marcones Lira" autofocus>    
            </div>
            <div class="mb-3">
              <label for="telefoneCDN" class="form-label">Telefone:</label>
              <input required name="telefoneCDN" type="text" class="form-control" id="telefoneCDN" aria-describedby="emailHelp" placeholder="Ex: 89196517">    
            </div>
            <div class="mb-3">
              <label for="cpfCDN" class="form-label">Cpf:</label>
              <input required name="cpfCDN" type="text" class="form-control" id="cpfCDN" aria-describedby="emailHelp" placeholder="Ex: 12220840409">
            </div>
            <div class="mb-3">
              <label for="senhaCDN" class="form-label">Senha:</label>
              <input required name="senhaCDN" type="text" class="form-control" id="senhaCDN" aria-describedby="emailHelp" placeholder="Ex: 123marcones321">
            </div>
            <div class="mb-3">
              <label for="tipoCDN" class="form-label">Tipo:</label>
              <input required name="tipoCDN" type="text" class="form-control" id="tipoCDN" aria-describedby="emailHelp" value="coordenador" placeholder="Ex: Coordenador">
            </div>
         
            <div class="d-grid gap-2 col-6 mx-auto">

            <input type="submit" class="btn btn-primary"  name="submit" id="submit" type="submit" value="Cadastrar">
                   
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