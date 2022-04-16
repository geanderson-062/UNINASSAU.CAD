<?php 

      include("conexao_adm.php");//incluindo arquivo de conexao
    
      //criando vareaveis para receber valores da tabela cadastra_visita
      $usuario=$_POST['usuario'];
      $setor=$_POST['setor'];
      $escola=$_POST['escola'];
      $alunos=$_POST['alunos'];
      $conteudo=$_POST['conteudo'];
      $professor=$_POST['professor'];

      //inserindo os valores digitados na tabela cadastra_visita
      $sql="INSERT INTO cadastra_visita (usuario,setor,escola,alunos,conteudo,professor,data) 
      VALUES ('$usuario', '$setor', '$escola', '$alunos','$conteudo','$professor')";
      //dentro de values ta pegando avalores digitado e mandando para o banco
      //aspas simples nas vareaveis por conta que são varchar

      //verificando o cadastro
      if(mysqli_query($conexao, $sql)){

        //caso cadastro seja bem sucedido vai exibir isso
        echo "Usuario cadastrado com sucesso";

      }

      else {

        //case de algum erro vai exibir qual erro deu
        echo "erro".mysqli_connect_error($conexao);

      }

      //encerrando a conexao para não trava o banco
      mysqli_close($conexao);

?>