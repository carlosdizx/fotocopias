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
        <h1>Programas academicos</h1>
        <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="agregar_facultad.php" method="post" autocomplete="off">
                        <div class="form-group">
                            <input type="text" name="programa" placeholder="Ingrese el programa" required class="form-control" autofocus>
                        </div>
                        <br />
                        <div class="form-group">
                            <input type="text" name="director" placeholder="Director del programa" required class="form-control">
                        </div>
                        <br />
                        <input class="btn btn-success" type="submit" value="Agregar" name="agregar">
                    </form>
                </div>
            </div>
            </div>  

        <div class="col-md-8">
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
        </div>
    </div>
     <?php } ?>
<?php } ?>
