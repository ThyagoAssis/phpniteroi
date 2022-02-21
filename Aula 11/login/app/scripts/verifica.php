<?php
    //Funçao verificar login
    function logIn(){

        //Caso nã oesteja conectado retorna falso
        if(!isset($_SESSION['login']) || $_SESSION['login'] !== true){
            return false;
        }

        //Caso esteja conectado retorna verdadeiro
        return true;

    }

?>