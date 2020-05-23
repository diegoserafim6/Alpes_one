<head>
    <title>Listar - Alpes One</title>

<?php include 'head.php' ?>
<?php include 'menu.php' ?>
</head>
</body>
        <!-- Indice da tabela que contém os dados cadastrados  -->
        <div class="form-row col-md-9 col-sm-1 mt-4">
            <table class="table table-hover table-striped-bordered mb-5">
                <thead>
                    <th>Nome Completo</th>
                    <th>CPF</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>E-mail</th>
                    <th>Telefone Fixo </th>
                    <th>Telefone Celular</th>
                    <th>Usuario</th>
                    <th>Senha</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody id="tabela" >
                    <tr >
                        <td>Diego Serafim</td>
                        <td>123456</td>
                         <td>Masculino</td>
                        <td>05/05/1990</td>
                        <td>diego@diego</td>
                        <td>3133333333</td>
                        <td>3199999999</td>
                       <td>Diego</td>
                        <td>123456</td>
                        <form class="col-md-7 mt-3 rounded" action="conectabd.php" method="post" id="Formulario">
                        <td> <input type='submit' name='editar_usuario' class='btn  cor' value='Editar'></td>
                        <td> <input type='submit' name='deletar_usuario' class='btn  cor' value='Deletar'></td>
</form>
                       <tr>
                             <!-- Resgata os dados cadastrados via php e carrega automaticamente -->
                                <?php include 'Lista_Cadastrados.php' ?>
                    </tbody>
            </table>
            </form>

            <!-- Rodapé  -->
            <nav class="navbar fixed-bottom cor justify-content-end "> Alpes One </nav>
            </body>




