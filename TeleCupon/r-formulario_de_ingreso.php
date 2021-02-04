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
        <form class="text-center form-ingreso" action="" method="POST">

            <div class="row">
                <div class="col-12">
                    <h2 class="title2"><span class="blue-text">INGRESA</span> O CREA TU CUENTA</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="email" placeholder="Email*" class="large">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="password" placeholder="Contraseña*" class="large">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="button" class="button-12-ingresar">
                        Ingresar
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="" class="float-start olvidaste_tu_contraseña">
                        <span class="p-olvidaste_tu_contraseña">¿No recuerdas tu contraseña? Haz click aquí para recuperarla</span>
                    </a>
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