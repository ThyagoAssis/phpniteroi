<?php  
  require_once("./app/scripts/conecta.php");
?>

<section class="container mt-5 text-center">
<div class='row mb-5'>

      <!-- Inicio PHP -->
      <?php
        //Prepara a nossa query
        $query = $conecta->prepare("SELECT * FROM tb_livros");
        $query->execute();

        //Tratando o resultado da consulta
        //fetchALL - é como se ele fatiando a tabela
        $resultado = $query->fetchALL(PDO::FETCH_ASSOC); //a variavel $resultado vira um array
        
        foreach($resultado as $rows){      

          //Cartão
          echo (" 
            <div class='col-3 '>          
              <img  src='$rows[imagem]' class='corpo img_corpo'alt='...' >
            </div> 
          ");        
        }
      ?>
      <!-- Fim PHP -->
  </div>

</section>