<?php
include("docs/header.php");
?>

    <div class="p-4">
        <div class="row">
            <di class="col-md-4 mx-auto">
                <div class="card">
                    <h1>Editar programa acdemico</h1>
                    <div class="card-body">
                        <form action="editar_programa_aux.php?id=<?=$_GET['id'] ?>" method="post" autocomplete="off">
                            <div class="form-group">
                                <input disabled name="id" type="text"
                                       value="<?= isset($_GET['id']) ? $_GET['id'] : 'Erorr, programa no encontrando' ?>"
                                       class="form-control">
                            </div>
                            <br />
                            <div class="form-group">
                                <input type="text" name="programa" placeholder="Ingrese programa academico"
                                       value="<?= isset($_GET['programa']) ? $_GET['programa'] : 'Programa de Cristo Rey ✌😎' ?>"
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