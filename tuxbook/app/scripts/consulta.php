<!-- Inicio PHP -->
<?php

  require_once("conecta.php");
  //Prepara a nossa query
  $query = $conecta->prepare("SELECT * FROM tb_livros");
  $query->execute();

  //Tratando o resultado da consulta
  //fetchALL - é como se ele fatiando a tabela
  $resultado = $query->fetchALL(PDO::FETCH_ASSOC); //a variavel $resultado vira um array

?>