<?php
    include_once("docs/conexion.php");
    if(isset($_POST["agregar"]))
    {
        $miFacultad = $_POST['facultdad'];
        $sql ="INSERT INTO facultades (nombre) VALUES ('$miFacultad');";
        $consulta = mysqli_query($conexion,$sql);
        if (!$consulta){
            die("La insercion no se pudo realizar".$conexion->connect_error);
        }
        else
        {
            header("Location:index.php");
        }
    }
