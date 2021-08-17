<?php
include("docs/header.php");
include("docs/conexion.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM programas WHERE id = '$id';";
    $consulta = mysqli_query($conexion,$sql);
    if($consulta) { ?>
        <div class="container p-4">
            <?php while($row=mysqli_fetch_array($consulta)){ ?>
                <h1><?=$row['nombre']?></h1>
            <?php }
            $sql = "SELECT * FROM solicitudes WHERE id_programa = '$id';";
            $consulta = mysqli_query($conexion,$sql);?>
            <h1>Solicitudes</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" autocomplete="off">
                                <div class="form-group">
                                    <input class="form-control" type="number" name="cantidad" placeholder="Cantidad de fotocopias" required autofocus>
                                </div>
                                <br />
                                <div class="form-group">
                                    <input class="form-control" type="text" name="material" placeholder="Material de las copias" required>
                                </div>
                                <br />
                                <input class="btn btn-success" type="submit" value="Registrar" name="registrar">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID.</th>
                                <th>Fecha</th>
                                <th>Cantiad</th>
                                <th>Material</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_array($consulta)) { ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['fecha'] ?></td>
                                <td><?= $row['cantidad'] ?></td>
                                <td><?= $row['material'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>
