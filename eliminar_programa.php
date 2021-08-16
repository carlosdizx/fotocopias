<?php
    include("docs/conexion.php");
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $idFacultad = $_GET['codigo'];
        $sql = "DELETE FROM programas WHERE id = $id";
        $consulta = mysqli_query($conexion,$sql);
        if (!$consulta){
            die("El programa no se pudo eliminar, posiblemente tenga solicitudes de copias registradas ".$conexion->error."");
        }
        else
        {
            $_SESSION['mensaje'] ="Programa academico eliminado correctamente";
            $_SESSION['color'] ="danger";
            header("Location:/fotocopias/detalles_facultad.php?id=".$idFacultad);
        }
    }