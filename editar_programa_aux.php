<?php
include_once("docs/conexion.php");
if(isset($_POST["actualizar"]) && isset($_GET['id']))
{
    $programa = $_POST['programa'];
    $id = $_GET['id'];
    $facultdad = $_GET['facultdad'];
    $director = $_POST['director'];
    $sql ="UPDATE programas SET nombre = '$programa',director = '$director' WHERE '$id' = id;";
    $consulta = mysqli_query($conexion,$sql);
    if (!$consulta){
        die("La insercion no se pudo realizar ".$conexion->error);
    }
    else
    {
        $_SESSION['mensaje'] ="Programa academico actualizado correctamente";
        $_SESSION['color'] ="success";
        header("Location:/fotocopias/detalles_facultad.php?id=".$facultdad);
    }
}
else
{
    echo "No llego";
}
