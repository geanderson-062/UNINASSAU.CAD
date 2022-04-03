 //mostrar ou ocultar senha                           

 function mostrarOcultarSenha(){

    var senha=document.getElementById("floatingPassword");

    if(senha.type=="password"){
            senha.type="text";
    }

    else{
            senha.type="password";
    }    
     
 } 