<html>
<link rel="shortcut icon" href="resources/image/favicon/favicon-32x32.png">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gestão Integrada de participações">
    <meta name="author" content="Grinalda Soares">
	<title>Login</title>
	<link rel="stylesheet" href="resources/css/master.css">
	<link rel="stylesheet" href="resources/css/login.css">
	<!-- Bootstrap Core CSS -->
    <link href="admin/html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin/html/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,600i,700,900" rel="stylesheet">
</head>
<body>
<div class="areaMenu smal">
	<a href="#" class="logo"><img src="resources/image/logo.png" alt="Ministério da Justiça" ></a>
	<nav>
		<ul class="menus">
			<li> <a href="index.html">Página Inicial</a></li>
			<li><a href="#">Central de Ajuda</a></li>
			<li> <a href="registro.html">Criar Conta</a></li>
			<li class="active"><a href="login.php">Entrar</a> </li>
		</ul>
	</nav>
</div>
	<div class="row areaTop">
		<div class="">
			<h2>Entrar</h2>
			<h4>Inicie Sessão para fazer registro de uma reclamação, denuncia ou queixa</h4>
		</div>
	</div>
	<div class="row areaForm ">
		<div class="LoginForm">
			<form role="form" id="formLogin">
			  <div class="form-group has">
			    <label for="email">Seu Email</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="password">Palavra Pass</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Manter Sessão Iniciada
			    </label>
			  </div>
			  <button type="button" class="btn btn-info" id="btOk">Entrar</button>
				<div id="alerttopright" class="myadmin-alert myadmin-alert-img alert-danger myadmin-alert-top-right " >
					<i class="fa fa-exclamation-triangle img" style="font-size: 2.5rem; padding: 1rem" id="alertIcon"></i><a href="#" class="closed">x</a>
					<smal class="textAlert"><h4>Erro!</h4> Preenha os campos obrigatórios</smal>
				</div>
			</form>
			<div class="row">
				<hr>
				<p class="pull-left">Ainda não tem uma conta? <a href="registro.html"> Registre-se aqui.</a></p>
<!--				<p class="pull-right"><a href="#">Esqueceu-se da palavra-passe?</a></p>-->
			</div>
		</div>
	</div>
<footer class="row">
    <p>&copy Copyright - 2017</p>
    <p>Made with <img style="width: 1.5rem; margin: 0 .5rem" src="resources/image/Coracao.png" alt="">  by <a
                href="http://www.justica.gov.st/organiques/CIR.php" style="color: white"> CIR </a> - Todos os direitos Reservados</p>
</footer>
</body>
<script src="admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="resources/js/utilitarios.js"></script>
<script src="resources/js/funcoes.js"></script>
<script src="resources/js/login.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="admin/html/bootstrap/dist/js/bootstrap.min.js"></script>
</html>