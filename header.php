<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Quantum Desarrollos</title>
		<link rel="shortcut icon" href="img/icon.ico">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/colorbox.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand no-drag smoothScroll" href="<?php if( !($thispage == 'index') ) echo 'index.php'; ?>#inicio"><img class="no-drag" src="img/logo.png" alt="Logo"></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<div class="col-sm-6 text-left">
							<li><a href="<?php if( !($thispage == 'index') ) echo 'index.php'; ?>#inicio" class="smoothScroll">Inicio</a></li>
							<li><a href="<?php if( !($thispage == 'index') ) echo 'index.php'; ?>#nosotros" class="smoothScroll">Nosotros</a></li>
						</div>
						<div class="col-sm-6 text-right">
							<li class="dropdown">
								<a href="#" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Desarrollos</a>
								<ul class="dropdown-menu">
									<li><a href="america-latina.php">América Latina</a></li>
									<li><a href="ricon-cerezos.php">Rincón de los Cerezos (Preventa)</a></li>
									<li><a href="">Los Encinos Oriente (Preventa)</a></li>
									<li><a href="">Desarrollo Comercial Plaza Colón 305 (Próximamente)</a></li>
									<li><a href="">Los Encinos Oriente lotes habitacionales</a></li>
								</ul>
							</li>
							<li><a href="<?php if( !($thispage == 'index') ) echo 'index.php'; ?>#contacto" class="smoothScroll">Contacto</a></li>
						</div>
					</ul>
				</div>
			</div>
		</nav>