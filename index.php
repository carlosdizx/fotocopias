<?php
include("docs/header.php");
include("docs/nav.php");
include_once("docs/conexion.php");
?>
<!-- Espacio de HTML -->
<div class="container p-4">
    <div class="row">


        <div class="col-md-4">

            <?php if(isset($_SESSION['mensaje'])){?>
            <div class="alert alert-<?=$_SESSION['color']?> alert-dismissible fade show" role="alert">
                <?=$_SESSION['mensaje']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); }?>

            <!-- Formulario de insercion de facultades -->
            <div class="card">
                <div class="card-body">
                    <form action="agregar_facultad.php" method="post" autocomplete="off">
                        <div class="form-group">
                            <input type="text" name="facultdad" placeholder="Ingrese la facultdad" required class="form-control" autofocus>
                        </div>
                        <br />
                        <input class="btn btn-success" type="submit" value="Agregar" name="agregar">
                    </form>
                </div>
            </div>
        </div>

        <!-- Tabla de facultades -->
        <div class="col-md-8">
            <table class="table table-striped table-bordered" border="1">
                <thead>
                    <tr>
                        <th>ID.</th>
                        <th>Facultad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM facultades";
                        $consulta=mysqli_query($conexion,$sql)or die(mysqli_error($conexion));
                        while($row=mysqli_fetch_array($consulta)){
                        ?>
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="detalles_facultad.php?id=<?php echo $row['id'] ?>">
                                    <?php echo $row['id'] ?>
                                </a>
                            </td>
                            <td><?= $row['nombre'] ?></td>
                            <td>
                                <a class="btn btn-warning" href="editar_facultad.php?id=<?=$row['id']."&facultdad=".$row['nombre']?>">
                                    <span class="mdi mdi-pencil-outline"></span>
                                </a>
                                <a class="btn btn-danger" href="eliminar_facultad.php?id=<?=$row['id']?>">
                                    <span class="mdi mdi-trash-can-outline"></span>
                                </a>
                            </td>
                        </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("docs/footer.php"); ?>