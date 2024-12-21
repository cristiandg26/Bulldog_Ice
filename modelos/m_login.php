<?php

//Conexión
require_once 'config/conexion.php';

class m_login extends Conexion
{
    public function __construct() {}

    public function Login($user, $pass){

        try {
            $conn = Conexion::abrir_conexion_mysql();
            $sql = "SELECT * FROM per WHERE USR = :user AND PASS = :pass ";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':pass', $pass);
            //$stmt->debugDumpParams();
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $resultado;
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return false;
        }
    }

}
