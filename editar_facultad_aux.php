<?php
include_once("docs/conexion.php");
    if(isset($_POST["actualizar"]) && isset($_GET['id']))
    {
        $facultad = $_POST['facultdad'];
        $id = $_GET['id'];
        $sql ="UPDATE facultades SET nombre = '$facultad' WHERE '$id' = id;";
        $consulta = mysqli_query($conexion,$sql);
        if (!$consulta){
            die("La insercion no se pudo realizar ".$conexion->error);
        }
        else
        {
            $_SESSION['mensaje'] ="Facultad actualizada correctamente";
            $_SESSION['color'] ="success";
            header("Location:/fotocopias/");
        }
    }
    else
    {
        echo "No llego";
    }
