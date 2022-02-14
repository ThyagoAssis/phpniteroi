<?php
    //Chama a conecxão co m o banco de dados
    require_once("conexao.php");
    
    //Prepara a nossa query
    $query = $conecta->prepare("SELECT * FROM tb_livros");
    $query->execute();

    //Tratando o resultado da consulta
    //fetchALL - é como se ele fatiando a tabela
    $resultado = $query->fetchALL(PDO::FETCH_ASSOC); //a variavel $resultado vira um array

    //print_r($resultado);

    foreach($resultado as $index){

        echo ("
            <table width='100%' border='1px' >
            <tr>    
        ");

        ///segundo foreach
        foreach($index as $key => $value){
            echo "<td>" .  $value . "</td>";
        }

        //Fim segundo foreach

        echo("
            </tr>
            </table>        
        ");

        
    }
