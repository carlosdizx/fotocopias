<?php
include_once("docs/conexion.php");
if(isset($_POST["actualizar"]) && isset($_GET['id']))
{
    $cantidad = $_POST['cantidad'];
    $material = $_POST['material'];
    $id = $_GET['id'];
    $programa = $_GET['programa'];
    $sql ="UPDATE solicitudes SET cantidad = '$cantidad',material ='$material' WHERE id = '$id';";
    $consulta = mysqli_query($conexion,$sql);
    if (!$consulta){
        die("La insercion no se pudo realizar ".$conexion->error);
    }
    else
    {
        $_SESSION['mensaje'] ="Programa academico actualizado correctamente";
        $_SESSION['color'] ="success";
        header("Location:/fotocopias/detalles_programa.php?id=".$programa);
    }
}