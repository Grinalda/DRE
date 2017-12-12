<?php
    session_start();
    if (!isset($_SESSION['sessao'])){ header('Location: login.php');}

?>
<html>
<link rel="shortcut icon" href="resources/image/favicon/favicon-32x32.png">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema Integrado de gestão de petições">
    <meta name="author" content="Ministério da Justiça">
	<title>Participação</title>
	<link rel="stylesheet" href="resources/css/master.css">
	<link rel="stylesheet" href="resources/css/login.css">
	<!-- Bootstrap Core CSS -->
    <link href="admin/html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/html/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,600i,700,900" rel="stylesheet">
	<link rel="stylesheet" href="admin/plugins/bower_components/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="admin/plugins/bower_components/dropzone.css">
</head>
<body>
<div class="areaMenu smal">
	<a href="index.html" class="logo"><img src="resources/image/logo.png" alt="Ministério da Justiça" ></a>
	<nav>
		<ul class="menus">
			<li> <a href="index.html">Página Inicial</a></li>
			<li><a href="help.html">Central de Ajuda</a></li>
			<li> <a href="registro.html">Criar Conta</a></li>
            <div class="areaPerson">
                <img class="avatarPerson" src="resources/image/avatar.png" alt="">
                <p>
                    <?php
                        echo $_SESSION["sessao"]['pessoa_Nome'];
                    ?>
                </p>

            </div>
		</ul>
	</nav>
</div>
	<div class="row areaTop">
		<div class="">
			<h2>Registar Participação</h2>
			<h4>Registre uma reclamação, denuncia ou queixa</h4>
		</div>
	</div>
	<div class="container areaForm ">
		<div class="col-md-9 register">
			<form role="form" class="form-horizontal form-material" id="formParticipacao">
                <input type="hidden" id="pessoa" name="pessoa"
                   value="<?php
                        echo $_SESSION["sessao"]['pessoa_id'];
                   ?>">
			  <div class="radio-list col-md-12 m-b-30">
			  <label class="labelObribatory" style="margin-right: 3rem;">Tipo de Participação</label>
                <label class="radio-inline">
                    <div class="radio radio-info">
                        <input type="radio" name="tipoParticipacao" id="rdReclamacao" value="2" checked="">
                        <label for="rdReclamacao">Reclamação</label>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="radio radio-info">
                        <input type="radio" name="tipoParticipacao" id="rdQueixa" value="3">
                        <label for="rdQueixa">Queixa </label>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="radio radio-info">
                        <input type="radio" name="tipoParticipacao" id="rddenuncia" value="1">
                        <label for="rddenuncia">Denuncia </label>
                    </div>
                </label>
	          </div>

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-12 labelObribatory">Contra quem</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" name="quem" id="quem"  placeholder="">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="labelObribatory">Data de ocorrência</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" placeholder="" id="dataOcorencia" name="dataOcorencia">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="labelObribatory">Local de ocorrência</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" name="local" id="local" placeholder="">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="labelObribatory">Sobre os factos declaro que ororreram da seguiste forma:</label>
						<div class="col-md-12">
							<textarea rows="6" class="form-control form-control-line" name="descricao" id="descricao"></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="labelObribatory">Testemunhas</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" placeholder="" name="testemunha" id="testemunha">
						</div>
					</div>
				</div>
			  <!--<div class="col-sm-12">
			  	<label class="">Prova</label>
                  <div class="col-sm-12">
                      <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                          <div class="form-control" data-trigger="fileinput">
                              <i class="glyphicon glyphicon-file fileinput-exists"></i>
                              <span class="fileinput-filename"></span>
                          </div>
                          <span class="input-group-addon btn btn-default btn-file">
                              <span class="fileinput-new">Select file</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="file"  id="fileParticipacao">
                          </span>
                          <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                      </div>
                  </div>
			  </div>-->
			</form>
			<div class="row areaButton">
				<button type="submit" class="btn btn-info btRegister" id="btSave">Salvar</button>
				<div id="alerttopright" class="myadmin-alert myadmin-alert-img alert-danger myadmin-alert-top-right">
					<i class="fa fa-exclamation-triangle img" style="font-size: 2.5rem; padding: 1rem" id="alertIcon"></i><a href="#" class="closed">x</a>
					<smal class="textAlert"><h4>Erro!</h4> Preenha os campos obrigatórios</smal>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12">
			<div class="white-box areaInfo">
				<b>Precisa de ajuda?</b> <br>
				<li>Os campos com <b style="color: red; font-size: 2rem; text-align: center">*</b> são obrigatórios.</li>
				<br>

			</div>
		</div>
	</div>
<footer class="row">
    <p>&copy Copyright - 2017</p>
    <p>Made with <img style="width: 1.5rem; margin: 0 .5rem" src="resources/image/Coracao.png" alt="">  by <a
                href="http://www.justica.gov.st/organiques/CIR.php" style="color: white"> CIR </a> - Todos os direitos Reservados</p>
</footer>
</body>


<!-- Bootstrap Core JavaScript -->
<script src="admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="admin/plugins/bower_components/bootstrap-datepicker.min.js"></script>
<script src="admin/plugins/bower_components/dropzone.js"></script>
<script src="resources/js/utilitarios.js"></script>
<script src="resources/js/funcoes.js"></script>
<script src="resources/js/participacao.js"></script>

<!-- Custom Theme JavaScript -->
<!--<script src="admin/html/js/custom.min.js"></script>-->

</html>