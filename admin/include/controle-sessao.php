<?php

    // controle de sessãp
    session_start();
    

    // isset verifica de uma var existe
    // se a var sessão email nao estiver setada o usuario sera redirecionado para o login / somente é permitido acesso a essa pagina se a sessao foi iniciada

    if(!isset ($_SESSION['email'])){
        header('location: ../');
    } 

?>