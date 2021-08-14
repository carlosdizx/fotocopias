<?php
    // Variables de conexion
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fotocopias";

    // Creacion de cadena de conexion

    $conexion = new mysqli($servername,$username,$password,$database)
        or die("Conexion fallo en el servidor de gestor de base de datos".$conexion->connect_error);
