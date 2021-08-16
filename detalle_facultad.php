<?php
include("docs/header.php");
include("docs/conexion.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM programas WHERE id_facultad = '$id';";
    $consulta = mysqli_query($conexion,$sql);
    if(!$consulta){
?>

    

    <?php }
    else{ 
        ?>
        <div class="container p-4">
        <h1>Programas academicos</h1>

        <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID.</th>
                        <th>Facultad</th>
                        <th>Director</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row=mysqli_fetch_array($consulta)){ ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['director'] ?></td>
                        <td>
                            <a href="" class="btn btn-warning">
                                <span class="mdi mdi-pencil-outline">Editar</span>
                            </a>
                            <a href="" class="btn btn-danger">
                                <span class="mdi mdi-trash-can-outline">Eliminar</span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
        </table>
    </div>
     <?php } ?>
<?php } ?>
