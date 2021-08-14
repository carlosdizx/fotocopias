<?php
    // Variables de conexion
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fotocopias";

    // Creacion de cadena de conexion
    $url = "mysql:host=".$this->server.";dbname=".$this->database.";charset=utf8";

    try {
        $conexion = new PDO($url, $username, $password);
        $this.$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e) {
        $this->conexion = "error de conexion";
        echo $e->getMessage();
    }
