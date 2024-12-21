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
			$_SESSION["idUsuario"] = $result['PERID'];
			$_SESSION["Correo"] = $result['NOMBRE'];
			require_once("view/dashboard/v_dahsboard.php");
			//echo  "<script>alert('Haz ingresado correctamente')</script>";
		}
		if ($result == 1) {
			header("Location:index.php?view=login2&danger=1");
		}
		if ($result == 2) {
			header("Location:index.php?view=login2&danger=2");
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
