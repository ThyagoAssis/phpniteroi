<?php

    session_start();

    echo "Seja bem Vindo: " . $_SESSION['nome'] . "<br>";


    echo "Email: " . $_SESSION['email']; 

?>
<br>
<a href="index.php">Inicio</a>