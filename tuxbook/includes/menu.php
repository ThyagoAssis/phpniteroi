<!--- Minha NavBar / Cabeçalho-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"> <img src="img/logo/logo.png" alt="" class="img-fluid rounded"></a>
   <!--  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <?php if (logIn()) : ?>

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
            </ul>
          </li>
        </ul>
        <span class="text-light mr-3">Seja bem Vindo! <?php echo $_SESSION['nome']; ?></span>
        <a href="./app/scripts/logout.php">
          <button class="btn btn-danger btn-sm "><i class="bi bi-box-arrow-left"> Sair</i></button>
        </a>
      </div>

      <!--Fim navbar adm-->
    <?php else : ?>
      <!--Início navbar Desconectado-->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav me-auto mb-2 mb-lg-0  mr-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item  "><button class=" btn btn-secondary rounded-circle shadow bi bi-box-arrow-in-right " data-bs-toggle="modal" data-bs-target="#loginModal"></button></li>
          <!-- <li class="nav-item ml-3"><button class="btn btn-secondary shadow rounded-circle" data-bs-toggle="modal" data-bs-target="#registrarModal">Registre-se</button></li> -->
        </ul>


      </div>
  </div>

<?php endif; ?>
</nav>
<!--Fim NAVBAR-->