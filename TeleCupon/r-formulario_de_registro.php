<!doctype html>
<html lang="en">

<head>
    <?php
    include_once('includes/head.php');
    ?>
    <title>Formualario de registro</title>
</head>

<body class="background-form-registro">

    <?php
    $title = "El sitio que te da los mejores descuentos";
    include_once('includes/header.php');
    ?>
    <!-- Start-->
    <div class="container">
        <form class="text-center form-registro" action="" method="POST">

            <div class="row">
                <div class="col-12">
                    <h2 class="title2-2">INGRESA O <span class="blue-text2">CREA TU CUENTA</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="text" placeholder="Nombre*" class="large">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="email" placeholder="Email*" class="large">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="password" placeholder="Contraseña*(Mínimo 6 carácteres)" class="large">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="password" placeholder="Confirmación de contraseña" class="large">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <input type="text" placeholder="Ciudad" class="short">
                </div>

                <div class="col-6">
                    <input type="text" placeholder="Zip Code" class="shorter">
                </div>
            </div>

            <div class="half1">
                <div class="row">
                    <div class="col-12">
                        <input type="text" placeholder="Nombre del negocio" class="nombre-negocio">
                    </div>
                </div>
            </div>

            <div class="half2">
                <div class="row">
                    <div class="col-12">
                        <input type="text" placeholder="Giro" class="giro">
                    </div>
                </div>
            </div>

            <div class="half1">
                <div class="row">
                    <div class="col-12">
                        <input type="text" placeholder="Teléfono*" class="telefono-form-registro">
                    </div>
                </div>
            </div>

            <div class="half2">
                <div class="row">
                    <div class="col-12">
                        <input type="text" placeholder="Página web" class="pagina-web-form-registro">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="button" class="button-12">
                        Enviar
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="button" class="button-13">
                        <div class="row">
                            <div class="col-6">
                                <img src="images/facebook (1) 1.png" class="img-fluid button-13-img">
                            </div>
                            <div class="col-6">
                                <p class="p-button-13">
                                    Log in with Facebook
                                </p>
                            </div>
                        </div>
                    </button>
                </div>
            </div>


        </form>
    </div>
    <!--End-->
    <?php
    include_once('includes/footer.php');
    ?>

</body>

</html>