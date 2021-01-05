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
                        <a class="nav-link" href="#">Novidades</a>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                            Modelos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Hexagonal</a>
                            <a class="dropdown-item" href="#">Aviador</a>
                            <a class="dropdown-item" href="#">Justin</a>
                            <a class="dropdown-item" href="#">Round</a>
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


    



</body>

</html>

<?php

$host= "localhost";
$user= "root";
$pass= "";
$banco= "cadastro";
$conexao= mysqli_connect($host, $user, $pass) or die (mysqli_error());
mysqli_select_db($conexao, $banco) or die (mysqli_error());

?>

<html>
<head>
	<title>Autenticando usuário</title>
	<script type="text/javascript">
		function loginsuccessfully(){

			setTimeout("window.location='../index.html'",5000);
		
		}
		function loginfailed(){

			setTimeout("window.location='login.php'",5000);

		}
	</script>
</head>
<body>

<?php

$email=$_POST['email'];
$senha=$_POST['senha'];

$sql= mysqli_query($conexao,"SELECT * FROM usuarios WHERE email= '$email' and senha= '$senha'") or die (mysql_error());

$row= mysqli_num_rows($sql);
if($row > 0){

	session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['senha']=$_POST['senha'];
	echo "<center><h1>Você foi autenticado com sucesso!<br>Aguarde e será redirecionado.</h1></center>";
	echo "<script>loginsuccessfully()</script>";

} else {

	echo "<center><h1>Nome de usuário ou senha inválidos!</h1></center>";
	echo "<script>loginfailed()</script>";
}
?>

