<?php

session_start();

require_once("controlador/controlador.php");
$controlador = new Controlador();

if (isset($_SESSION["Correo"]) && isset($_SESSION["idUsuario"])) {
    if (isset($_GET["view"])) {
        switch ($_GET["view"]) {
            case 'logout':
                $controlador->Logout();
                break;

            default:
                $controlador->verPagina("view/dashboard/v_dashboard.php", "Escritorio");
                break;
        }
    } else {
        $controlador->verPagina("view/dashboard/v_dashboard.php", "Escritorio");
    }
} else {
    if (isset($_GET["view"])) {
        switch ($_GET["view"]) {
            case 'starting':
                $controlador->Login($_POST["user"], $_POST["pass"]);
                break;
            case 'login':
                $controlador->verlogin("view/login/login.php");
                break;
            default:
                $controlador->verlogin("view/login/login.php");
                break;
        }
    } else {
        $controlador->verlogin("view/login/login.php");
    }
}
