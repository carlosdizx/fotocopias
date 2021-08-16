<?php
include_once("docs/conexion.php");
    if(isset($_POST["actualizar"]))
    {
        $facultad = $_POST['facultdad'];
        $id = $_POST['id'];
        $sql ="UPDATE facultades SET nombre = '$facultad' WHERE '$id' = id;";
        $consulta = mysqli_query($conexion,$sql);
        if (!$consulta){
            die("La insercion no se pudo realizar ".$conexion->error);
        }
        else
        {
            $_SESSION['mensaje'] ="Facutlad actulizada correctamente";
            $_SESSION['color'] ="success";
            header("Location:index.php");
        }
    }
