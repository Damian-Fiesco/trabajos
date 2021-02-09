<div class="header-bar">
    <div class="container">


        <div class="row">
            <div class="col-6">
                <img src="images/svg-logo 1.png" alt="logo" class="img-fluid logo">
            </div>
            <div class="col-6">
                <button type="button" class="float-end pin">
                    <img src="images/pin-red.png" alt="pin" class="img-fluid pin-img">
                </button>
                <button type="button" class="float-end user">
                    <img src="images/user 1.png" alt="user" class="img-fluid user-img">
                </button>
            </div>

        </div>


        <div class="row">
            <div class="text-fields">
                <div class="col-12 col-md-9">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text lupa" id="basic-addon1"><img src="images/lupa 2.png" class="img-fluid lupa-img"></span>
                        </div>
                        <input type="text" class="form-control busqueda" placeholder="¿Qué esta buscando?" aria-label="busqueda" aria-describedby="basic-addon1">
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