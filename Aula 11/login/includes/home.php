<?php
    //Imports
    require('../app/scripts/verifica.php');

    //Iniciar a sessão
    session_start();

    //Testa se exite login
    if(logIn()){    

        if($_SESSION['nivel'] == 1){
            echo "Seja bem Vindo ADM: " . $_SESSION['nome'] . "<br>";
               
        }else{
            echo "Seja bem Vindo Usuário: " . $_SESSION['nome'];
        }

        echo "<a href='../app/scripts/logout.php'>Sair</a>";

    }else{
        header('Location: ../index.php');
    }
?>