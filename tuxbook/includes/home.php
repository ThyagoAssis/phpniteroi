<?php
  require_once("./app/scripts/conecta.php");
?>

<section class="container mt-5 text-center">
<div class='row mb-5'>

    <!--Inicio PHP-->
    <?php
        require __DIR__ . "../../app/scripts/consulta.php";
        
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