<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bulldog Ice</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="image/png" href="public/dist/img/logo_bdi_sf.png">
    <link rel="stylesheet" href="public/dist/css/login.css">
</head>
<body>
    <div id="login-wrap">
    <div class="login-image">
        <nav class="login-image-nav">
        <ul>
            <li style="width: 4%;"><a href="#"><div class="div_logo"><img src="public/dist/img/logo_bdi_sf.png" alt="error" class="logo1"></div></a></li>
            <li><a href="#">Contactenos</a></li>
        </ul>
        </nav>
        <div class="login-image-text">
        <h2 class="display-lg text-white">Un toque frío para tu día...</h2>
        <h2 class="display-lg text-primary">¡porque el sabor sí importa!</h2>
        </div>
        <nav class="login-image-footer">
        <ul>
            <li>
            <a href="#">
                <span class="text-white">Celular: </span><span class="text-primary">321 452 7264 & 322 251 5763</span>
            </a>
            </li>
            <li>
            </li>
        </ul>
        </nav>
    </div>
    <div class="login-card">
        <div class="login-card-header">
            <img src="public/dist/img/logo_bdi_sf.png" alt="error" class="logo2">
            <p class="text-muted">¡Bienvenido a nuestro sistema de gestión integral! Inicie sesión a continuación para optimizar su inventario y contabilidad.</p>
        </div>
        <form method="POST" action="?view=starting" method="post" class="login-card-form">
            <div class="input-group">
                <input type="text" name="user" id="user" placeholder="Usuario">
                <i class="m-i material-icons">Usuario</i>
            </div>
            <div class="input-group">
                <input type="password" name="pass" id="pass" placeholder="Contraseña">
                <i class="m-i material-icons">Contraseña</i>
            </div>
            <div class="btn-group">
                <button type="submit" vlaue="Submit" class="btn btn-primary">Inicio de sesion</button>
            </div>
        </form>
        <div class="login-card-footer">
            <p class="text-muted">2024 Copyright &copy; CMA, Commpany.</p>
        </div>
    </div>
    </div>

    <script src="public/dist/js/login.js"></script>
</body>
</html>

<?php
    if (isset($_GET["danger"])) {
        switch ($_GET["danger"]) {
            case 1:
                $mensaje = "La contraseña es incorrecta";
                break;
            case 2:
                $mensaje = "El usuario ingresado no existe";
                break;
        }
        echo  "<script>toastr.error('" . $mensaje . "')</script>";
    }
?>






