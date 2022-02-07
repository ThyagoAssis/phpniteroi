<?php

    if($_POST["nome"] &&  $_POST["cpf"]){
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];    

        echo "Nome: " . $nome . "<br>";
        echo "CPF: " . $cpf . "<br>";
    }else{
        //A função Header carrega um página
        header('Location: http://localhost/phpniteroi/Aula%2005/formulario2.php');
    }



    
   
?>  