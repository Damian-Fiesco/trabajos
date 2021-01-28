<!doctype html>
<html lang="en">

<head>
    <?php
    include_once('includes/head.php');
    ?>
    <title>Formualario de registro</title>
</head>

<body>

    <?php
    include_once('includes/header.php');
    ?>
    <!-- Start-->
    <div class="container">
        <form class="text-center form-registro2" action="" method="POST">

            <div class="row">
                <div class="col-12">
                    <h2 class="title2">CREA TU CUENTA</h2>
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
                    <input type="password" placeholder="Confirmación de contraseña*" class="large">
                </div>
            </div>

            <div class="row">
                <div class="col-7">
                    <input type="text" placeholder="Calle" class="float-end short">
                </div>

                <div class="col-5">
                    <input type="text" placeholder="No. de casa" class="float-start shorter">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="text" placeholder="Cuidad*" class="large">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="text" placeholder="Estado*" class="large">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="text" placeholder="Teléfono*" class="large">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="text" placeholder="ZIP Code" class="large">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="button" class="text-center button-12">
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