<?php
// Asi se revisa la consulta
// $stmt->debugDumpParams();

//Conexión
require_once 'config/conexion.php';

class m_login extends Conexion
{
    public function __construct() {}

    public function Login($user, $pass){

        try {
            $conn = Conexion::abrir_conexion_mysql();
            $sql = "SELECT * FROM per WHERE USR = :user AND PASS = :pass";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            $existe = $stmt->rowCount();
            if($existe <> 0){
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                return $resultado;
            }else {
                $sql2 = "SELECT * FROM per WHERE USR = :user2";
                $resultado2 = $conn->prepare($sql2);
                $resultado2->bindParam(":user2", $user);
                $resultado2->execute();
                $existe2 = $resultado2->rowCount();
                if ($existe2 <> 0) {
                    return 1; // EXISTE USUARIO PERO LA CLAVE ESTA MAL
                } else {
                    return 2; // NO EXISTE USUARIO
                }
            }
            $conn = Conexion::cerrar_conexion();
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return false;
        }
    }

}
