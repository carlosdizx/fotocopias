<?php
    include("docs/conexion.php");
    if (isset($_POST["agregar"]) && isset($_GET['id']))
    {
        $facultdad = $_POST['programa'];
        $director = $_POST['director'];
        $id = $_GET['id'];
        $sql = "INSERT INTO programas (nombre, director, id_facultad) VALUES ('$facultdad','$director','$id');";
        $consulta = mysqli_query($conexion,$sql);
        if (!$consulta){
            die("La insercion no se pudo realizar".$conexion->error);
        }
        else
        {
            $_SESSION['mensaje'] ="programa academico agregado correctamente";
            $_SESSION['color'] ="success";
            header("Location:/fotocopias/detalles_facultad.php?id=".$id);
        }
    }