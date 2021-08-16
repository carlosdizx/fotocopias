<?php
    include("docs/conexion.php");
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM facultades WHERE id = $id";
        $consulta = mysqli_query($conexion,$sql);
        if (!$consulta){
            die("La facultad no se pudo eliminar, posiblemente la facultad tenga programas academicos agregados ".$conexion->error."");
        }
        else
        {
            $_SESSION['mensaje'] ="Facultad eliminada correctamente";
            $_SESSION['color'] ="danger";
            header("Location:index.php");
        }
    }