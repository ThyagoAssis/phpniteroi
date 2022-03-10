<!--Inicio Modal Logar-->
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
          <input type="password" class="form-control mt-3 " name="senha" placeholder="Senha">
        </div>
        <div class="modal-footer ">
          <button type="submit" class="btn btn-secondary" name="btn-logar" data-bs-dismiss="modal">Entrar</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!--Fim Modal logar -->



<!--Inicio Modal -->
<div class="modal fade " id="registrarModal" tabindex="-1" aria-labelledby="registrarModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="resgistrarModalLabel">Cadastre-se</h5>
        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <form action="./app/scripts/sigIn.php" method="post">
          <div class="container bg-secondary modal-body form-group">

            <div class="row mt-3">
                <div class="col-4">
                  <input type="text" class="form-control" name="nome" placeholder="Nome:">
                </div>
                <div class="col-8">
                  <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
                </div>
            </div>

              <div class="row mt-3">
                <div class="col-12">
                  <input type="mail" class="form-control " name="email" placeholder="email@mail.com">
                </div>
              </div>

            <div class="row mt-3">
              <div class="col-12">
                <input type="password" class="form-control  " name="senha" placeholder="Senha">
              </div>
            </div>

          </div>
        <div class="modal-footer ">
          <button type="submit" class="btn btn-secondary" name="btn-logar" data-bs-dismiss="modal">Cadastrar</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!--Fim Modal logar -->