    <head>
        <title>Deletar - Alpes One</title>
        <?php include 'head.php' ?>
        <?php include 'menu.php' ?>
        </head>
        <body> 
        <form class="col-md-7 mt-3 rounded" action="conectabd.php" method="post" id="Formulario">
            <div class="center">
                <div class="form-row">
                    <div class="col-md-6 col-sm-3 mb-3">
                        <p>Para excluir o usuário informe o login do usuario ou CPF :</p>

                        <br />
                        <label> Login do usuário </label>
                        <input type="text" class="form-control" name="Usuario"  />

                        <br />
                        <label> CPF </label>
                        <input type="text" class="form-control" name="CPF" pattern="[0-9]+$"  />

                        <div class="form-row mt-5">
                            <button class="btn cor align-text-bottom mb-5" name="deletar_usuario" type="submit">Deletar Usuario</button>
                            <button class="btn cor align-text-bottom ml-5 mb-5" type="reset">Limpar dados</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <nav class="navbar fixed-bottom cor justify-content-end "> Alpes One</nav>
        </body>


