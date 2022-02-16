    <section class="container justify-content-center mt-5">

        <h2 class="mb-3 mt-3 text-center">Formulario para Cadastro</h2>

        <div class="form-group mt-5">
            <form action="./app/scripts/cadastra.php" method="post">
                <!--Início linha1 Formulario-->
                <div class="row">
                    <div class="col-2">
                        <input class="form-control" type="text" name="isbn" placeholder="Informe o ISBN">
                    </div>

                    <div class="col-6">
                        <input class="form-control"  type="text" name="titulo" placeholder="Informe o Título">
                    </div>

                    <div class="col-4">
                        <input class="form-control"  type="text" name="autor" placeholder="Informe o Autor">
                    </div>
                </div>
                <!--Fim linha1 Formulario-->

                <!--Ínicio linha2 Formulario-->
                <div class="row mt-3">
                <div class="col-4">
                        <input class="form-control"  type="text" name="imagem" placeholder="http://imagem.imagem.com" >
                    </div>
                    <div class="col-4">
                        <input class="form-control"  type="text" name="editora" placeholder="Informe a Editora">
                    </div>

                    <div class="col-4">
                        <input class="form-control"  type="number" name="paginas" placholder="Paginas" >
                    </div>
                </div>
                <!--Fim linha2 Formulario-->

                <div class="row mt-3">
                    <div class="col">
                        <textarea class="form-control"  type="text" name="descricao" placeholder="Descrição"></textarea>
                    </div>                    
                </div>

                <!--Inicio Botao-->
                <div class="row mt-3">
                    <div class="col text-center">
                        <button class="btn btn-secondary">Enviar</button>
                    </div>
                </div>
                <!--Fim Botao-->
            </form>
        </div>

    </section>


