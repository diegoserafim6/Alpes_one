<head>

    <title> Cadastrar - Alpes One</title>
 <?php include 'head.php' ?>
<?php include 'menu.php' ?>

<script>
    $(document).ready(function()
	});
</script>

<!-- Formulario de cadastro -->
<form class="col-md-7 mt-3 rounded" action="conectabd.php" method="post" id="Formulario">
        <div class="center">
                        <div class="form-row  ">
                    <div class="col-md-3 col-sm-3 mb-3">
                        <label> Nome completo </label>
                        <input type="text" class="form-control" name="Nome_Completo" required>
                    </div>
                    <div class="col-md-3 col-sm-3 mb-3">
                        <label> CPF </label>
                        <input type="text" class="form-control" name="CPF" pattern="[0-9]+$" required>
                    </div>
                    <div class="col-md-3 col-sm-2 mb-3 ">
                        <label>Sexo </label>
                        <select class="custom-select mr-sm-2 " name="Sexo" required>
                            <option selected></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                    </div>
                </div>

                <div class="form-row content-fluid">

                    <div class="col-md-3 col-sm-3 mb-3 ">
                        <label> Setor </label>
                        <input type="text" class="form-control " name="Setor" required>
                    </div>
                    <div class="col-md-2 col-sm-3 mb-3 ">
                        <label> E-mail </label>
                        <input type="email" class="form-control " name="E_mail" required>
                    </div>
                    <div class="col-md-2 col-sm-3 mb-3 ">
                        <label>Telefone fixo </label>
                        <input type="text " class="form-control " name="Telefone_Fixo" pattern="[0-9]+$" required>
                    </div>
                    <div class="col-md-2 col-sm-3 mb-3 ">
                        <label>Telefone Celular </label>
                        <input type="text " class="form-control " name="Telefone_Celular" pattern="[0-9]+$" required>
                    </div>
                </div>


                <div class="form-row ">
                    <div class="col-md-5 col-sm-3 mb-3 ">
                        <label>Login </label>
                        <input type="text" class="form-control" name="Usuario" required>
                    </div>
                    <div class="col-md-4 col-sm-3 mb-3 ">
                        <label>Senha </label>
                        <input type="password" class="form-control " name="Senha" required>
                    </div>
                </div>
                <div class="form-row mt-5 ">

                    <button class="btn cor align-text-bottom mb-5" name='Cadastrar_usuario' type="submit"> Cadastrar Usuario </button>
                    <button class="btn cor align-text-bottom ml-5 mb-5" type="reset"> Limpar cadastro </button>
                </div>
        </div>

        </form>

</body>
             <!-- Rodapé  -->

<nav class="navbar fixed-bottom cor justify-content-end "> Alpes One</nav>


</body>
