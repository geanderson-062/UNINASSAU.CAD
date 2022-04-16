<? 
include ('conexao_coordenador.php');//incluidno arquivo de conecxao do banco de dados

//pegando valores de cpf e senha e verificando se eles estão vazios 
if (empty($_POST['cpf']) || empty($_POST['senha']));{
  
    //se o cpf e senha estiver vazio direcione para 
    header('Location: ../index.html');
      exit();//encerrar operação
} 

//verificar se o sistema está recebendo um sql injection e protegendo o login
$cpf = mysqli_real_escape_string($conexao,$_POST['cpf']); 
$senha = mysqli_real_escape_string($conexao,$_POST['senha']); 

//verificar se o login está certou ou não 
$query = "SELECT usuario_id, login_coordenador FROM login_coordenador where cpf = '{$cpf}' and senha = md5('{$senha}')";

//executando a aquery montada acima
$result = mysqli_query($conexao, $query);

//passando result como parametro
$row = mysqli_num_rows($result); 