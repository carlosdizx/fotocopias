<?php
include("docs/conexion.php");
if (isset($_POST["registrar"]) && isset($_GET['id']))
{
    $material = $_POST['material'];
    $cantidad = $_POST['cantidad'];
    $id = $_GET['id'];
    $sql = "INSERT INTO solicitudes (cantidad, material, id_programa) VALUES ('$cantidad','$material','$id');";
    $consulta = mysqli_query($conexion,$sql);
    if (!$consulta){
        die("La insercion no se pudo realizar".$conexion->error);
    }
    else
    {
        $_SESSION['mensaje'] ="Solicitud agregada correctamente";
        $_SESSION['color'] ="success";
        header("Location:/fotocopias/detalles_programa.php?id=".$id);
    }
}
