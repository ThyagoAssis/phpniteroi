<?php
  session_start();
  include("./app/scripts/verifica.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>TuxBook - Sua Livraria Digital</title>
</head>
<body>

    <!--- Minha NavBar / Cabeçalho-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="index.php">TUXBOOK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if(logIn()):?>

    <!-- Inicio navbar adm-->    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0  mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Livros
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                <li><a class="dropdown-item" href="#">Consultar</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
          </li>
        </ul>
        <span class="text-light mr-3">Seja bem Vindo! <?php echo $_SESSION['nome'];?></span>
        <a href="./app/scripts/logout.php">          
          <button class="btn btn-danger btn-sm " >
            <i class="bi bi-box-arrow-left"> Sair</i>
          </button>
          
        </a>  
      </div>

    <!--Fim navbar adm-->
    <?php else: ?>
    <!--Início navbar Desconectado-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav me-auto mb-2 mb-lg-0  mr-auto"></div>
      <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#loginModal">Logar</button> 
      <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#loginModal">Registre-se</button>   
    </div>   
  </div>

  <?php endif;?>
</nav><!--Fim NAVBAR-->


<!--Inicio Modal-->
<div class="modal fade " id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Logar</h5>
        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="./app/scripts/sigIn.php" method="post">      
        <div class="container bg-secondary modal-body form-group">
          <input type="mail" class="form-control " name="email" placeholder="email@mail.com">
          <input type="password" class="form-control mt-3 "  name="senha" placeholder="Senha">
        </div>
        <div class="modal-footer ">
          <button type="submit" class="btn btn-secondary" name="btn-logar" data-bs-dismiss="modal">Entrar</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!--Fim Modal-->

    
