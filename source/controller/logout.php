<?php 

//criando uma nova sessao e destruindo as outras.
session_start();
session_destroy();
header('Location: ../../../../index.html');
 exit();

?>