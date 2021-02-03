<!doctype html>
<html lang="en">

<head>
    <?php
    include_once('includes/head.php');
    ?>
    <title>Home</title>
</head>

<body>

    <?php
    $title = "El sitio que te da los mejores descuentos";
    include_once('includes/header.php');
    ?>
    <!-- Start-->
    <div class="container">
        <div class="row">
            <div class="col-3">
                <button type="button" class="float-start scroll-arrows-left-button">
                </button>
            </div>
            <div class="text-center col-6">
                <button type="button" class="text-center button-6">
                    <div class="float-start col-12 col-md-6 button-6-img">
                    </div>
                    <div class=" float-end col-12 col-md-6">
                        <div class="button-6-text">
                            <p class="p1-button-6">
                                15%
                            </p>
                            <p class="p2-button-6">
                                <b>DE DESCUENTO</b> EN CENAS<br>DE AÑO NUEVO
                            </p>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-3">
                <button type="button" class="float-end scroll-arrows-right-button">
                </button>
            </div>
        </div>

        <div class="row">
            <div class="text-center col-12">
                <div class="scroll-buttons">
                    <button type="button" class="scroll-button-selected">
                        .
                    </button>
                    <button type="button" class="scroll-button-not-selected">
                        .
                    </button>
                    <button type="button" class="scroll-button-not-selected">
                        .
                    </button>
                    <button type="button" class="scroll-button-not-selected">
                        .
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="p-bienvenida">Bienvenido a Telecupón, el lugar para ahorrar, aquí encontrarás increíbles descuentos en restaurantes, súper mercados, mensajería y muchos otros productos y servicios.
                </p>
            </div>
        </div>

        <form class="text-center como-funciona" action="">

            <div class="row">
                <div class="col-12">
                    <button type="button" class="button-7">
                        ¿COMO FUNCIONA?
                    </button>
                </div>
            </div>

        </form>

        <div class="row">
            <div class="col-12">
                <p class="text-center p-que-estas-buscando">
                    ¿QUE ESTAS BUSCANDO?
                </p>
            </div>
        </div>

        <div class="r-home-buttons">
            <div class="row">
                <div class="col-6 col-md-3">
                    <a href="trabajos.test/Telecupon/r-super.php" class="category">
                        <div class=" text-center super" style="background:#7B1BA8;">
                            <img src="images/Super.png" alt="super" class="img-fluid super-button-img">
                            <span> Super </span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="trabajos.test/TeleCupon/r-servicios.php" class="category">
                        <div class="text-center super" style="background:#FFCB21;">
                            <img src="images/Servicios.png" alt="servicios" class="img-fluid servicios-button-img">
                            <span> Servicios </span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="trabajos.test/Telecupon/r-comida.php" class="category">
                        <div class=" text-center super" style="background:#FF891D;">
                            <img src="images/Comida.png" alt="comida" class="img-fluid comida-button-img">
                            <span> Comida </span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="trabajos.test/TeleCupon/r-mensajeria.php" class="category">
                        <div class="text-center super" style="background:#00BAF2;">
                            <img src="images/Mensajeria.png" alt="mensajeria" class="img-fluid mensajeria-button-img">
                            <span> Mensajeria </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <button type="button" class="text-center patrocinadores">
                <div class="float-start col-12 col-md-6 patrocinadores-img">
                </div>
                <div class=" float-end col-12 col-md-6">
                    <div class="patrocinadores-text">
                        <p class="p1-patrocinadores">
                            ¿Quieres ser parte de<br>nuestros patrocinadores?
                        </p>
                        <p class="p2-patrocinadores">
                            Haz click aqui
                        </p>
                    </div>
                </div>
            </button>
        </div>

        <div class="row">
            <div class="text-center col-12">
                <div class="text-center footer">
                    <div class="float-start col-12 col-md-6 ">
                        <img src="images/tele-logo-cupon2.png" class="img-fluid footer-img">
                    </div>
                    <div class="float-end col-12 col-md-6">
                        <p class="p-footer">
                            ¡TE DA GRANDES PROMOCIONES!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-->
    <?php
    include_once('includes/footer.php');
    ?>

</body>

</html>