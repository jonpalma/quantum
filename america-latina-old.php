<?php $thispage="america-latina" ?>
<?php include('header.php'); ?>
<!-- FRACCIONAMIENTO -->
<div class="banner america-latina"><h1 class="white header text-center transform-center-vertical"></h1></div>
<div class="fraccionamiento container text-center spacing" id="fraccionamiento">
	<h1 class="blue header">FRACCIONAMIENTO</h1>
	<p class="text">Excelente ubicación, rápido acceso por principales avenidas, a unos minutos de centros comerciales, bancos, universidades, etc. <br> Amplitud en calle principal, área verde, juegos infantiles, totalmente privado para su seguridad y tranquilidad.</p>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="carousel-caption center-block">
					<div class="col-xs-4 img-spacing">
						<a class="group2 cboxElement" href="img/gallery/1.png"><img class="img-responsive center-block" src="img/gallery/1.png" alt=""></a>
					</div>
					<div class="col-xs-4 img-spacing">
						<a class="group2 cboxElement" href="img/gallery/2.png"><img class="img-responsive center-block" src="img/gallery/2.png" alt=""></a>
					</div>
					<div class="col-xs-4 img-spacing">
						<a class="group2 cboxElement" href="img/gallery/3.png"><img class="img-responsive center-block" src="img/gallery/3.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="carousel-caption center-block">
					<div class="col-xs-4 img-spacing">
						<a class="group2 cboxElement" href="img/gallery/1.png"><img class="img-responsive center-block" src="img/gallery/1.png" alt=""></a>
					</div>
					<div class="col-xs-4 img-spacing">
						<a class="group2 cboxElement" href="img/gallery/2.png"><img class="img-responsive center-block" src="img/gallery/2.png" alt=""></a>
					</div>
					<div class="col-xs-4 img-spacing">
						<a class="group2 cboxElement" href="img/gallery/3.png"><img class="img-responsive center-block" src="img/gallery/3.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="carousel-caption center-block">
					<div class="col-xs-4 img-spacing">
						<a class="group2 cboxElement" href="img/gallery/1.png"><img class="img-responsive center-block" src="img/gallery/1.png" alt=""></a>
					</div>
					<div class="col-xs-4 img-spacing">
						<a class="group2 cboxElement" href="img/gallery/2.png"><img class="img-responsive center-block" src="img/gallery/2.png" alt=""></a>
					</div>
					<div class="col-xs-4 img-spacing">
						<a class="group2 cboxElement" href="img/gallery/3.png"><img class="img-responsive center-block" src="img/gallery/3.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!-- FRACCIONAMIENTO -->

<!-- CASAS -->
<div class="casas parallax-container">
	<div class="parallax"><img src="img/parallax/2.jpg" alt=""></div>
	<div class="container text-center">
		<h1 class="white header">CONOCE TU NUEVO HOGAR</h1>
		<div class="col-sm-6">
			<img src="img/casa/planta-baja.png" alt="Planta Baja">
			<h4 class="white">PLANTA BAJA</h4>
			<a class="white-btn center-block green" href="">Ver</a>
		</div>
		<div class="col-sm-6">
			<img src="img/casa/planta-alta.png" alt="Planta Alta">
			<h4 class="white">PLANTA ALTA</h4>
			<a class="white-btn center-block green" href="">Ver</a>
		</div>
	</div>
</div>
<!-- CASAS -->

<!-- VIDEO -->
<div class="video container text-center spacing" id="video">
	<h1 class="blue header">VIDEO</h1>
	<p class="text">Aliquam nec risus eget felis posuere gravida. In sagittis nisi nisl, at egestas purus sagittis ultricies. Duis luctus eleifend dui.</p>
	<div class="video-container">
		<img href="#video-modal" data-toggle="modal" data-target="#video-modal" class="transform-center-vertical" src="img/icons/play.png" alt="Play">
	</div>
</div>
<div id="video-modal" class="modal fade video-modal" role="dialog">
	<div class="modal-dialog video">
		<div class="modal-content">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/9uDN9ZpvKu4" frameborder="0" allowfullscreen=""></iframe>
		</div>
	</div>
</div>
<!-- VIDEO -->

<div class="googleMap-full" id="googleMap" position="america-latina"></div>
<?php include('footer.php'); ?>