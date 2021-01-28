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
$title="Patrocinios";
include_once('includes/header.php');
?>
<!-- Start-->
<div class="container">
<form class="text-center form-registro" action="" method="POST">    
    
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

    <div class="row">
        <div class="col-12">
            <input type="text" placeholder="Nombre del negocio" class="large">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <input type="text" placeholder="Giro" class="large">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <input type="text" placeholder="Teléfono*" class="large">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <input type="text" placeholder="Página web" class="large">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
        <button type="button" class="button-3">
                    Enviar
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