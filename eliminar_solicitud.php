<?php
include("docs/conexion.php");
if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $codigo = $_GET['codigo'];
    $sql = "DELETE FROM solicitudes WHERE id = $id";
    $consulta = mysqli_query($conexion,$sql);
    if (!$consulta){
        die("No se pudo eliminar la solicitud, algo raro pasa👀 ".$conexion->error."");
    }
    else
    {
        $_SESSION['mensaje'] ="Solicitud fue eliminada correctamente";
        $_SESSION['color'] ="danger";
        header("Location:/fotocopias/detalles_programa.php?id=".$codigo);
    }
}