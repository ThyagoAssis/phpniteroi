<?php
    //Imports
    require('../app/scripts/verifica.php');

    //Iniciar a sessão
    session_start();

    //Testa se exite login
    if(logIn()){    

        if($_SESSION['nivel'] == 1){
            echo "Seja bem Vindo ADM: " . $_SESSION['nome'];      
        }else{
            echo "Seja bem Vindo Usuário: " . $_SESSION['nome'];
        }

    }else{
        header('Location: ../index.php');
    }
?>