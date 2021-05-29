<?php include('modulos/sesionnivel1.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Productive Brains - UT | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../img/logo-icon.png">

    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Font Awesome - Iconos - -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="../librerias/fontawesome/css/all.css"> -->

    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/boxs.css">
    <link rel="stylesheet" href="/css/animate/animate.min.css">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        body,
        html {
            height: 100%;
        }

        .bg {
            /* The image used */
            background-image: url("../media/img/carousel-3.jpg");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="bg">
    <div class="container text-center">
        <div class="row justify-content-center pt-5">
            <div class="col-lg-4   animate__animated animate__flipInX">
                <form action="loguear.php" method="POST">
                    <div class="card glass">
                        <div class="col-lg-12 text-center">
                            <img src="../media/img/ut_logo1.png"  width="100%"class="animate__bounceIn" alt="UT">
                            <br>
                        </div>
                        <div class="col-lg-12 text-center mt-3">
                            <div class="input-group-text">
                                <span class="fas fa-user">&nbsp&nbsp</span>
                                <input type="text" class="form-control" placeholder="usuario" name="usuario">
                            </div>
                            <div class="input-group-text mt-2">
                                <span class="fas fa-lock">&nbsp&nbsp</span>
                                <input type="password" class="form-control" placeholder="clave" name="clave" autocomplete="on">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
                            </div>
                            <div class="col-12 mt-1">
                                <a href="https://ut.sotano.digital/intranet/" class="btn btn-danger btn-block">Volver a Intranet</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>