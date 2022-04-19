<?php 

$servidor="localhost"; //servidor usado
$usuario="root";//usuario do banco
$senha="";//senha do banco se tiver senha e esta 147258369
$dbname="definitivo";//nome do banco

$conexao = mysqli_connect($servidor,$usuario,$senha,$dbname);
//conectando mysql com as vareaveis declaracadas a cima 

if(!$conexao){
   
    //se casp não tiver conexao mostrar o erro
    die ("Houve um erro ".mysqli_connect_error());

}


Function mensagem ($texto , $tip) {
    header("location: dashboard_adm.php");
    
    echo"<div class='alert alert-$tip'  role='alert'>$texto</div>";
    
    }

?>