<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fotocopias";

    // Conectar a la base de datos
    $conexion = new mysqli($servername,$username,$password,$database)
    or die("Conexion fallida".$conexion->connect_error);

