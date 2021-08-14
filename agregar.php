<?php
    include("docs/conexion.php");
    if(isset($_POST["agregar"]))
    {
        $miFacultad = $_POST['facultdad'];
        $sql ="INSERT INTO facultades (nombre) VALUES ('$miFacultad');";
        $consulta = mysqli_query($conexion,$sql);
        if (!$consulta){
            die("La insercion no se pudo realizar".$conexion->error);
        }
        else
        {
            header("Location:index.php");
        }
    }
