<?php

    //O bloco try catch faz verificação de erros
    try {
        //Credenciais de acesso
        define('DBNAME', 'db_tuxbook');
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');

        //Conexão com o banco de dados
        $conecta = new PDO('mysql:dbname=' . DBNAME . ';host=' . HOST . ';', USER, PASS);

    }catch (PDOException $e) {
        echo $e->getMessage();
        echo "ouou";

    }

?>