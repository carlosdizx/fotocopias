<?php
class Conexion{

    // Variables de conexion
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "fotocopias";
    private $conexion;

    public function __construct(){
        // Creacion de cadena de conexion
        $url = "mysql:host=".$this->servername.";dbname=".$this->database.";charset=utf8";
        try {
            $this->conexion = new PDO($url, $this->username, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (Exception $e) {
            $this->conexion = "error de conexion";
            echo $e->getMessage();
        }
    }

}

