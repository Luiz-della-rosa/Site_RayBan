<!doctype html>
<html lang="pt-br">

<head>
    <title>XVision</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="bootstrap.css">

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
        <div class="container">

            <a class="navbar-brand h1 mb-0" href="../index.html"><strong>XVision</strong></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#">Exclusivos</a>
                    </li>

                    <li class="nav-item dropdown">
                      
                      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                          Modelos
                      </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../modelos_linkados/Hexagonal.html">Hexagonal</a>
                            <a class="dropdown-item" href="../modelos_linkados/Aviador.html">Aviador</a>
                            <a class="dropdown-item" href="../modelos_linkados/Justin.html">Justin</a>
                            <a class="dropdown-item" href="../modelos_linkados/Round.html">Round</a>
                        </div>
                  </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                            Coleções
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Óculos de Sol</a>
                            <a class="dropdown-item" href="#">Óculos de grau</a>
                            <a class="dropdown-item" href="#">Customize</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Novidades</a>
                    </li>

                </ul>

               

                <form class="form-inline">
                    <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar...">
                    <button class="btn btn-dark" type="Submit">OK</button>
                </form>

            </div>

        </div>

    </nav>


    <div class="form-area">

        <h1>Entrar</h1>
        <form name="loginform" method="post" action="userauthentication.php">
            <input type="text" name= "email" placeholder="Usuário">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="ACESSAR">

            <a href="cadastro.php">Ainda não é cadastrado? Cadastre-se!</a>
                



        </form>

    </div>



</body>

</html>