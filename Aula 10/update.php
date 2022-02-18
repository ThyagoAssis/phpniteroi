<?php
    if($_POST['nome'] && $_POST['cpf']){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];

        require_once("conecta.php");

        $query = $conecta->prepare("UPDATE tb_autor SET nomeAutor = :NOME, cpf = :CPF WHERE idAutor = :ID");
        $query->execute(array(
            ':ID'=>$id,
            ':NOME'=>$nome,
            ':CPF'=>$cpf
        ));
    }
?>