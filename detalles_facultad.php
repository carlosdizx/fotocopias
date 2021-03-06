<?php
include("docs/header.php");
include("docs/conexion.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM facultades WHERE id = '$id';";
    $consulta = mysqli_query($conexion,$sql);
    if(!$consulta){
        ?>



    <?php }
    else{
        ?>
        <div class="container p-4">
            <?php while ($row = mysqli_fetch_array($consulta)) { ?>
                <h1><?=$row['nombre']?></h1>
            <?php }
            $sql = "SELECT * FROM programas WHERE id_facultad = '$id';";
            $consulta = mysqli_query($conexion,$sql);
            ?>
            <h4>Programas academicos</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="agregar_programa.php?id=<?=$_GET['id']?>" method="post" autocomplete="off">
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
                                <td><a class="btn btn-primary" href="detalles_programa.php?id=<?= $row['id'] ?>"><?= $row['id'] ?></a></td>
                                <td><?= $row['nombre'] ?></td>
                                <td><?= $row['director'] ?></td>
                                <td>
                                    <a href="editar_programa.php?id=<?=$row['id']."&programa=".$row['nombre']."&facultdad=".$_GET['id']."&director=".$row['director']?>"
                                       class="btn btn-warning">
                                        <span class="mdi mdi-pencil-outline">Editar</span>
                                    </a>
                                    <a href="eliminar_programa.php?id=<?=$row['id']."&codigo=".$_GET['id']?>" class="btn btn-danger">
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
