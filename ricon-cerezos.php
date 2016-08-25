<?php $thispage="ricon-cerezos" ?>
<?php include ('header.php'); ?>
<div class="wrapper desarrollo">
	<div class="inicio" id="inicio">
		<div id="carousel-fraccionamiento" class="carousel slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="no-drag" src="img/banner/rincon-cerezos.jpg" alt="Banner">
				</div>
				<div class="item">
					<img class="no-drag" src="img/banner/map.jpg" alt="Banner">
				</div>
				<div class="item">
					<img class="no-drag" src="img/banner/t-118.jpg" alt="Banner">
				</div>
				<div class="item">
					<img class="no-drag" src="img/banner/t-149.jpg" alt="Banner">
				</div>
				<div class="item">
					<img class="no-drag" src="img/banner/parque-cerezos.jpg" alt="Banner">
				</div>
				<div class="item">
					<img class="no-drag" src="img/banner/t-149Casas.jpg" alt="Banner">
				</div>
				<div class="item">
					<img class="no-drag" src="img/banner/t-149Comedor.jpg" alt="Banner">
				</div>
				<div class="item">
					<img class="no-drag" src="img/banner/t-149Estancia.jpg" alt="Banner">
				</div>
				<div class="item">
					<img class="no-drag" src="img/banner/t-149Sala.jpg" alt="Banner">
				</div>
				<div class="item">
					<img class="no-drag" src="img/banner/exterior.jpg" alt="Banner">
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
	</div>
	<div class="preventa spacing">
		<img src="img/cerezos/left.png" class="left hidden-xs">
		<div class="container text-center">
			<h1 class="gray-green">FRACCIONAMIENTO rincón de los cerezos</h1>
			<h2 class="gray">PREVENTA</h2>
		</div>
		<img src="img/cerezos/right.png" class="right hidden-xs">
	</div>
	<div class="parallax-container modelos-parallax">
		<div class="parallax">
			<img src="img/parallax/parallax-4.jpg" alt="">
		</div>
		<div class="container text-center transform-center-vertical-banner">
			<h1 class="header white">Nuestros modelos</h1>
		</div>
		<div class="corner-white-left"></div>
		<div class="corner-white-right"></div>
	</div>
	<div class="modelos spacing">
		<div class="container text-center">
			<div class="text-center"><img src="img/decoration/double-lines-brown.png"></div>
			<div class="row no-margin">
				<div class="col-sm-6">
					<img class="img-responsive center-block" src="img/modelos/t118.png" alt="Modelo T118">
					<p class="brown text-modelo blue">Modelo t118</p>
					<a class="brown center-block" href="pdf/ModeloT118.pdf" target="_blank">Ver Modelo</a>
					<a class="brown center-block" href="pdf/ModeloT118.pdf" download>Descargar</a>
				</div>
				<div class="col-sm-6">
					<img class="img-responsive center-block" src="img/modelos/t133.png" alt="Modelo T133">
					<p class="brown text-modelo blue">Modelo t149</p>
					<a class="brown center-block" href="pdf/Modelo149.pdf" target="_blank">Ver Modelo</a>
					<a class="brown center-block" href="pdf/Modelo149.pdf" download>Descargar</a>
				</div>
			</div>
			<div class="text-center"><img src="img/decoration/double-lines-brown.png"></div>
		</div>
	</div>
	<div class="googleMap" id="googleMap" position="rincon-cerezos"></div>
</div>
<?php include ('footer.php'); ?>