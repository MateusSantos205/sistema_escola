<?php
    include 'include/conexao.php';

    // iniciando a sessão
    session_start();

    // limpando as variaveis da sessão
    session_unset();

    // destroi a sessão
    session_destroy();

    header('location:../');

?>