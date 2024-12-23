<?php

session_start();

require_once("controlador/controlador.php");
$controlador = new Controlador();

if (isset($_SESSION["NOMBRE"])) {
    if (isset($_GET["view"])) {
        switch ($_GET["view"]) {
            case 'logout':
                $controlador->Logout();
                break;

            default:
                $controlador->verPagina("view/header.php", "Escritorio");
                break;
        }
    } else {
        $controlador->verPagina("view/header.php", "Escritorio");
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
            case 'error_login':
                switch ($_GET["danger"]) {
                    case '1':
                        echo  "<script>alert('EXISTE USUARIO PERO LA CLAVE ESTA MAL')</script>";
                        break;
                    case '2':
                        echo  "<script>alert('NO EXISTE USUARIO')</script>";
                        break;
                    
                    default:
                        $controlador->verlogin("view/login/login.php");
                        break;
                }
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
