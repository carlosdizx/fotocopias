<?php
include("lib/header.php");
include("lib/nav.php");
include_once("lib/conexion.php");
?>
<!-- Espacio de HTML -->
<div class="container p-4">
    <div class="row">

        <!-- Formulario de insercion de facultades -->
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Joder chaval!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="facultdad" id="" placeholder="Ingrese la facultdad" required>
                        </div>
                        <br />
                        <input type="submit" value="Agregar">
                    </form>
                </div>
            </div>
        </div>

        <!-- Tabla de facultades -->
        <div class="col-md-8">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
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
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td>editar-eliminar</td>
                        </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("lib/footer.php"); ?>
