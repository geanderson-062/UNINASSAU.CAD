<?php 

$servidor="localhost"; //servidor usado
$usuario="root";//usuario do banco
$senha="147258369";//senha do banco
$dbname="praticaprofissionalads5";//nome do banco

$conexao = mysqli_connect($servidor,$usuario,$senha,$dbname);
//conectando mysql com as vareaveis declaracadas a cima 

if(!$conexao){
   
    //se casp não tiver conexao mostrar o erro
    die ("Houve um erro ".mysqli_connect_error());

}

?>