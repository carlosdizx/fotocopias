<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "fotocopias";
    $mysqli = new mysqli($host,$username,$password,$database);

    if (mysqli_connect_error()){
        echo "Error al conectar a la base de datos".mysqli_connect_error();
    }
