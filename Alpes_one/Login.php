   <head>
        <title>Alpes One - Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS JS e CSS Externo  -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css.css" />

        <!-- Fontes utilizas -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    </head>

    <body id="Body_Pagina">
        <!-- Barra inicial  -->
        <ul class="nav cor">
            <li class="nav-item">
                <a class="nav m-2 text-white"></a>
            </li>
        </ul>

        <div class="row justify-content-center">
            <a href="https://alpes.one/" target="_blank"> <img src="img/logo.jpg" /> </a>
        </div>

        <!-- Corpo do conteúdo  -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-2 col-sm-2 p-3 rounded">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label>Usuário</label>
                        <input type="text" class="form-control" name="Nome_Completo" />
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="Senha" />
                    </div>

                    <button type="submit" value="submit" name="submits" class="btn cor">Acessar</button>
                    <button type="submit" class="btn cor">Esqueci a senha</button>
                    <?php include 'conectabd.php'; ?>
                </form>

                <!-- Realiza a validação via php do nome de usuário e a senha   -->

                <!-- Rodapé  -->

                <nav class="navbar fixed-bottom cor justify-content-end">Alpes One</nav>
            </div>
        </div>
    </body>

