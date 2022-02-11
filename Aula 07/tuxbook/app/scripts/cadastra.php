<?php
    //Conexão com o banco de dados
    require_once("conecta.php");

    //Verifica se o form foi preenchido
    //A funçao isset verifica se uma variável ou array esta vazio
    if(  $_POST["titulo"] && $_POST["isbn"] && $_POST["autor"] && $_POST["editora"]  ){

        //Variáveis
        $titulo = $_POST["titulo"];
        $isbn = $_POST["isbn"];
        $autor = $_POST["autor"];
        $editora = $_POST["editora"];
        $paginas = $_POST["paginas"];

        //Montando  a query
        $query = $conecta->prepare("INSERT INTO tb_livros(titulo, isbn, autor, editora, paginas) VALUES(:TITULO, :ISBN, :AUTOR, :EDITORA, :PAGINAS)");

        //Associando as variáveis 
        /* 
            $query->bindParam(":TITULO", $titulo);
            $query->bindParam(":ISBN", $isbn);
            $query->bindParam(":AUTOR", $autor);
            $query->bindParam(":EDITORA", $editora);
            $query->bindParam(":PAGINAS", $pagina);
        */
        //Executar
        $query->execute(array(
            ':TITULO' => $titulo,
            ':ISBN' => $isbn,
            ':AUTOR' => $autor,
            ':EDITORA' => $editora,
            ':PAGINAS' => $paginas
        ));
        echo "Será que cadastrou?";
    }else {
        header("Location: http://localhost/phpniteroi/Aula%2007/tuxbook/");
    }

?>