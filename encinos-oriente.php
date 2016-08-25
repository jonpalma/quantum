<?php $thispage="america-latina" ?>
<?php include ('header.php'); ?>
<div class="wrapper desarrollo">
	<div id="carousel-fraccionamiento" class="carousel slide" data-ride="carousel">

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="no-drag" src="img/banner/bg-encinos.jpg" alt="Banner">
			</div>
			<div class="item">
				<img src="img/banner/encinos.jpg" alt="Encinos Oriente">
			</div>
			<div class="item">
				<img src="img/banner/t-48.jpg" alt="Encinos Oriente">
			</div>
			<div class="item">
				<img src="img/banner/parque-encinos.jpg" alt="Encinos Oriente">
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-fraccionamiento" role="button" data-slide="prev">
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-fraccionamiento" role="button" data-slide="next">
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="hogar">
		<div class="container">
			<div class="col-sm-6">
				<h1 class="header-desarrollo blue">Hogar dulce Hogar</h1>
				<div class="blue-divider"></div>
				<p class="text">
					Una nueva opción al sur de la ciudad, viviendas de 50 m2 y lote tipo de 120 m2, excelente acceso por Av. Fuerza Aérea y Av. Equus.
				</p>
			</div>
			<div class="col-sm-6 hidden-xs">
				<img src="img/encinos/hogar.png" alt="Exterior de Hogares">
			</div>
		</div>
	</div>
	<div class="parallax-container modelos-parallax">
		<div class="parallax">
			<img src="img/parallax/parallax-3.jpg" alt="">
		</div>
		<div class="container text-center transform-center-vertical-banner">
			<h1 class="header white">Nuestros modelos</h1>
		</div>
		<div class="corner-white-left"></div>
		<div class="corner-white-right"></div>
	</div>
	<div class="modelos spacing">
		<div class="container text-center">
			<div class="text-center"><img src="img/decoration/double-lines.png"></div>
			<img src="img/modelos/t48.png" alt="Modelo T48">
			<p class="text-modelo blue">Modelo t48</p>
			<a class="center-block" href="pdf/ModeloT48.pdf" target="_blank">Ver Modelo</a>
			<a class="center-block" href="pdf/ModeloT48.pdf" download>Descargar</a>
			<div class="text-center"><img src="img/decoration/double-lines.png"></div>
		</div>
	</div>
	<div class="galeria spacing text-center container">
		<h1 class="header green">Galería</h1>
		<div class="row no-margin">
			<a href="img/encinos/galeria/full-size/1.jpg" class="group2 cboxElement">
				<div class="col-sm-4 no-padding">
					<img class="img-responsive" src="img/encinos/galeria/1.png" alt="Foto">
				</div>
			</a>
			<a href="img/encinos/galeria/full-size/2.jpg" class="group2 cboxElement">
				<div class="col-sm-4 no-padding">
					<img class="img-responsive" src="img/encinos/galeria/2.png" alt="Foto">
				</div>
			</a>
			<a href="img/encinos/galeria/full-size/3.jpg" class="group2 cboxElement">
				<div class="col-sm-4 no-padding">
					<img class="img-responsive" src="img/encinos/galeria/3.png" alt="Foto">
				</div>
			</a>
			<div class="col-sm-2 no-padding hidden-xs"></div>
			<a href="img/encinos/galeria/full-size/4.jpg" class="group2 cboxElement">
				<div class="col-sm-4 no-padding">
					<img class="img-responsive" src="img/encinos/galeria/4.png" alt="Foto">
				</div>
			</a>
			<a href="img/encinos/galeria/full-size/7.jpg" class="group2 cboxElement">
				<div class="col-sm-4 no-padding">
					<img class="img-responsive" src="img/encinos/galeria/7.png" alt="Foto">
				</div>
			</a>
		</div>
	</div>
	<div class="googleMap" id="googleMap" position="encinos-oriente"></div>
</div>
<?php include ('footer.php'); ?>