<?php
    echo ("
    
    <h1>Sessões em PHP</h1>
    <h2>O que são sessões?</h2>
    <p>
        Sessões são conexões estabelecidas entre o servidor e o usuário. Elas servem para identificar cada acesso de forma individual.
        São usadas tambem para proteção das páginas dos sites
    </p>   
    
    ");

    //Iniciar sessão
    session_start();

    //Ao iniciar uma sessão temos acesso a um  array superglobal
    $_SESSION['email'] = 'thyago@gmail.com';
    $_SESSION['nivel'] = 'adm';
    $_SESSION['mensagem'] = 'Seja bem vindo!';





?>