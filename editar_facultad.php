<?php
include("docs/header.php");
?>
    <div class="p-4">
        <div class="row">
            <di class="col-md-4 mx-auto">
                <div class="card">
                    <h1>Editar facultad</h1>
                    <div class="card-body">
                        <form action="editar_facultad_aux.php?id=<?=$_GET['id'] ?>" method="post" autocomplete="off">
                            <div class="form-group">
                                <input disabled name="id" type="text"
                                       value="<?= isset($_GET['id']) ? $_GET['id'] : 'Erorr, facultdad no encontrada' ?>"
                                       class="form-control">
                            </div>
                            <br />
                            <div class="form-group">
                                <input type="text" name="facultdad" placeholder="Ingrese la facultdad"
                                       value="<?= isset($_GET['facultdad']) ? $_GET['facultdad'] : 'Facultad de Cristo Rey ✌😎' ?>"
                                       required class="form-control">
                            </div>
                            <br />
                            <input class="btn btn-success" type="submit"
                                   value="<?= isset($_GET['id']) ? "Actualizar" : "Volver"  ?>"
                                   name="actualizar" />
                        </form>
                    </div>
                </div>
            </di>
        </div>
    </div>

<?php include("docs/footer.php"); ?>
