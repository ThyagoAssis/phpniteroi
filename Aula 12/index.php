<?php
    //Revisao de sessão
    echo "Teste de sessão";
    session_start();


    $_SESSION['nome'] = 'Maria';
    $_SESSION['sobrenome'] = 'Almeida';
    $_SESSION['email'] = 'marcos@gmail.com';
    $_SESSION['nivel'] = 1;

    session_destroy();



?>

<a href="home.php">Home</a>