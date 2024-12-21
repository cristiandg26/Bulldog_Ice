<?php
require 'global.php';

class Conexion
{
    private static $db_host = DB_HOST;
    private static $db_user = DB_USERNAME;
    private static $db_password = DB_PASSWORD;
    protected $db_name = DB_NAME;

    public function abrir_conexion_mysql()
    {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=" . self::$db_host . ";dbname=" . $this->db_name, self::$db_user, self::$db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    
    public function cerrar_conexion($conn)
    {
        return $conn = null;
    }
}
