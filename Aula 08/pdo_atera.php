<?php
    //Conexão com banco de dados
    require_once("conexao.php");

    //Declara as variáveis
    $id = 7;
    $titulo = 'Histórias do Vasco';
    $isbn = '3232';
    $autor = 'Segundas Silva';
    $editora = 'CaindoBooks';
    $paginas = '2';

    
    //Montar a query
    $query = $conecta->prepare("UPDATE tb_livros SET titulo = :TITULO, isbn = :ISBN, autor = :AUTOR, editora = :EDITORA, paginas = :PAGINAS WHERE idLivro = :ID ");

    //Associando as variáveis a query e executando
    $query->execute(array(

        ':TITULO' => $titulo,
        ':ISBN' => $isbn,
        ':AUTOR' => $autor,
        ':EDITORA' => $editora,
        ':PAGINAS' => $paginas,
        ':ID' => $id
    ));



?>