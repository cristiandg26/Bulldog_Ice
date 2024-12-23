<?php

class Controlador
{
	public function __construct() {}
	
	public function verlogin($url){
		require_once($url);
	}

	public function verPagina($url, $titel){
		$_SESSION['tiel_dash'] = $titel;
		require_once($url);
	}

	public function Login($user, $pass){

		require_once("modelos/m_login.php");
		$m_login = new m_login();


		$_SESSION["idUsuario"] = 1;

		$result = $m_login->Login($user, $pass);
		if ($result != 1 && $result != 2){
			$_SESSION["NOMBRE"] = $result['NOMBRE'];
			require_once("view/header.php");
			//echo  "<script>alert('Haz ingresado correctamente')</script>";
		}
		if ($result == 1) {
			// echo  "<script>alert('EXISTE USUARIO PERO LA CLAVE ESTA MAL')</script>";
			header("Location:index.php?view=error_login&danger=1");
		}
		if ($result == 2) {
			// echo  "<script>alert('NO EXISTE USUARIO')</script>";
			header("Location:index.php?view=error_login&danger=2");
		}
	}

	public function Logout(){
		if (isset($_SESSION["idUsuario"])) {
			unset($_SESSION["idUsuario"]);
		}
		session_destroy();
		header("Location:index.php");
	}
}
