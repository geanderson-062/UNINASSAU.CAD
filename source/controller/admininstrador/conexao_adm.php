<?php 

define('HOST', '127.0.0.1:3306'); //ip do banco de dados 

define('USUARIO', 'root'); // nome de usuario do banco 

define('SENHA', '147258369'); // senha do banco de daddos 

define('DB', 'praticaprofissionalads5'); // nome  do banco  de dados 

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');
//conectando mysql com HOST, USUARIO, SENHA, DB 
// o or die diz que caso não consiga de a msg Não foi possivel conectar

 