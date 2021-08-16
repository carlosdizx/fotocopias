<?php
include("docs/header.php");
include_once("docs/conexion.php");
?>

    <div class="p-4">
        <div class="row">
            <di class="col-md-4 mx-auto">
                <div class="card">
                    <h1>Editar facultad</h1>
                    <div class="card-body">
                        <form action="index.php" method="post" autocomplete="off">
                            <div class="form-group">
                                <input type="number" disabled name="id"
                                       value="<?php echo isset($_GET['id']) ? $_GET['id'] : 'Erorr facultdad no encontrado' ?>"
                                       required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="facultdad" placeholder="Ingrese la facultdad"
                                       value="<?php echo isset($_GET['facultdad']) ? $_GET['facultdad'] : 'La facultad de cristo rey 😎✌' ?>"
                                       required class="form-control" autofocus>
                            </div>
                            <br />
                            <input class="btn btn-success" type="submit" value="Actualizar" name="actualizar">
                        </form>
                    </div>
                </div>
            </di>
        </div>
    </div>

<?php include("docs/footer.php"); ?>
