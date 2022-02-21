<?php

    //Iniciar a sessão
    session_start();

    if($_SESSION['email'] == 'thyago@gmail.com'){
        echo $_SESSION['mensagem'];
        echo "Usuário administrador";
    }else{

        echo "Area restrita!";
        session_destroy();
    }

    


?>