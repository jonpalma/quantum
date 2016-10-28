<?php $thispage="index" ?>
<?php include('header.php'); ?>
<div class="wrapper">
    <!-- Carousel -->
    <div class="inicio" id="inicio">
        <div id="carousel-fraccionamiento" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-fraccionamiento" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-fraccionamiento" data-slide-to="1"></li>
                <li data-target="#carousel-fraccionamiento" data-slide-to="2"></li>
                <li data-target="#carousel-fraccionamiento" data-slide-to="3"></li>
                <li data-target="#carousel-fraccionamiento" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="no-drag" src="img/index/banner/banner1.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img class="no-drag" src="img/index/banner/banner2.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img class="no-drag" src="img/index/banner/banner3.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img class="no-drag" src="img/index/banner/banner4.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img class="no-drag" src="img/index/banner/banner5.jpg" alt="Banner">
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

    <!-- COTIZA -->
    <div class="cotiza spacing text-center" id="cotiza">
        <a class="header" href="#cotiza-modal" data-toggle="modal" data-target="#cotiza-modal"><img src="img/icons/cotiza.png" alt="COTIZA"></a>
    </div>
    
    <!-- COTIZA MODAL -->
    <div class="modal fade" id="cotiza-modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="green text-center">Proporciona tus datos para que uno de nuestros asesores de ventas se comunique contigo.</h3>
                </div>
                <div class="modal-body">
                    <form action="cotizacion-mailer.php" method="post" id="contact-form-2">
                        <input class="input" type="text" id="name-2" name="name-2" placeholder="Nombre">
                        <input class="input" type="text" id="phone-2" name="phone-2" placeholder="Teléfono">
                        <input class="input" type="text" id="email-2" name="email-2" placeholder="Correo electrónico">
                        <div class="button text-right">
                            <button class="submit" id="form-submit-2">Enviar</button>
                        </div>
                        <div id="form-output-2"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- NOSOTROS -->
    <div class="nosotros container text-left spacing" id="nosotros">
        <div class="col-sm-6">
            <h1 class="green header">EL MEJOR LUGAR<br>PARA TU HOGAR</h1>
            <div class="green-divider"></div>
            <p class="text">En Quantum estamos enfocados en diseñar, edificar y desarrollar espacios habitacionales y comerciales, con el objetivo de satisfacer tus necesidades; comprometidos siempre con tu patrimonio y el de tu familia, adaptando nuestros desarrollos al entorno y medio ambiente.</p>
        </div>
        <div class="col-sm-5 hidden-xs decoration">
            <img src="img/decoration/sofa.jpg" alt="Sofá">
        </div>
    </div>
    <!-- NOSOTROS -->

    <!-- CONTACTO -->
    <div class="parallax-container contacto" id="contacto">
        <div class="parallax hidden-xs"><img src="img/parallax/parallax-1.jpg" alt="parallax"></div>
        <div class="container">
            <div class="col-sm-6">
                <h1 class="white header">ENCUÉNTRANOS EN</h1>
                <div class="white-divider"></div>
                <p class="text white">
                    <span class="direccion">Dirección Condominio América Latina:</span><br>
                    América Latina #5710, Col. Industrial Nombre de Dios, Chihuahua, Chih.
                </p>
                <p class="text white">
                    <span class="telefono">Teléfono:</span><br>
                    (614) 425.04.44<br>
                </p>
                <p class="text white">
                    <span class="telefono">Teléfonos de Venta:</span><br>
                    Sergio Chávez: (614) 488.3984<br>
                </p>
                <p class="text white">
                    <span class="correo">Correo:</span><br>
                    <a class="white" href="mailto:contacto@quantumdesarrollos.com.mx">contacto@quantumdesarrollos.com.mx</a>
                </p>
            </div>
            <div class="col-sm-6">
                <h1 class="white text-left header">¿PODEMOS AYUDARTE?</h1>
                <div class="white-divider"></div>
                <div class="form-container">
                    <form action="mailer.php" method="post" id="contact-form">
                        <input class="input" type="text" id="name" name="name" placeholder="Nombre">
                        <input class="input" type="text" id="email" name="email" placeholder="Correo electrónico">
                        <input class="input" type="text" id="location" name="location" placeholder="Dirección">
                        <input class="input" type="text" id="phone" name="phone" placeholder="Teléfono">
                        <textarea class="input" name="info" id="info" cols="30" rows="5" placeholder="Mensaje"></textarea>
                        <div class="button">
                            <button class="submit" id="form-submit">Enviar</button>
                        </div>
                        <div id="form-output"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACTO -->

    <!--<div class="googleMap" id="googleMap" position="central"></div>-->
</div>
<?php include('footer.php'); ?>