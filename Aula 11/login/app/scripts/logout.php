<?php
    //Iniciar a sessão
    session_start();

    //Mudar o0 status da conexao
    $_SESSION['login'] = false;

    //Desconecta a sessão
    session_destroy();

    echo "Você se desconectou <br> ";
    echo "Para acessar novamente <a href='../../index.php'> Clique aqui</a>";
?>