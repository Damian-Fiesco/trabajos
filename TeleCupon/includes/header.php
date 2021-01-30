<div class="header-bar">
    <div class="container">


        <div class="row">
            <div class="col-6">
                <img src="images/svg-logo 1.png" alt="logo" class="img-fluid logo">
            </div>
            <div class="col-6">
                <button type="button" class="float-end user">
                    <img src="images/user 1.png" alt="User" class="img-fluid user-img">
                </button>
                <button type="button" class="float-end menu">
                    <img src="images/menu-img.png" alt="menu" class="img-fluid menu-img">
                </button>
            </div>

        </div>

        <div class="text-fields">
            <div class="row">
                <div class="col-7">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text lupa" id="basic-addon1"><img src="images/lupa 2.png" class="img-fluid lupa-img"></span>
                        </div>
                        <input type="text" class="form-control busqueda" placeholder="¿Qué esta buscando?" aria-label="busqueda" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="col-5">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pin" id="basic-addon1"><img src="images/Layer 1.png" class="img-fluid pin-img"></span>
                        </div>
                        <input type="text" class="form-control ubicacion" placeholder="Ubicación" aria-label="ubicacion" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($title)) {

        ?>
            <div class="row">

                <div class="col-12">
                    <h2 class="title"><?php echo $title; ?></h2>
                </div>
            </div>
        <?php

        }
        ?>




    </div>
</div>