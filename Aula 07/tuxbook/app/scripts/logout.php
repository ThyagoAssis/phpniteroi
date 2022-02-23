<?php
    //Iniciar a sessão
    session_start();

    //Mudar o0 status da conexao
    $_SESSION['login'] = false;

    //Desconecta a sessão
    session_destroy();

   header('Location: ../../index.php');
?>