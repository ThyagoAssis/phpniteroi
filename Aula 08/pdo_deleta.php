<?php

    //Chama a conecxão co m o banco de dados
    require_once("conexao.php");

    //Variável para exclusão

    $id = 5;

    //Query de exclusão
    $query = $conecta->prepare("DELETE FROM tb_livros WHERE idLivro = :ID");
    $query->bindParam(":ID",$id);

    //Execute
    $query->execute();

    //Carrega a pagina de consulta
    header("Location: http://localhost/phpniteroi/Aula%2008/pdo_consulta.php");



?>