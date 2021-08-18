<?php
include("docs/header.php");
?>

<div class="p-4">
    <div class="col-md-4 mx-auto">
        <div class="card">
            <div class="card-body">
                <form action="editar_solicitud_aux.php?id=<?=$_GET['id']."&programa=".$_GET['programa']?>" method="post" autocomplete="off"">
                <div class="form-group">
                    <input class="form-control" type="text" name="id" placeholder="Cantidad de fotocopias" required disabled
                           value="<?= isset($_GET['id']) ? $_GET['id'] : 'Solicitud no encontrada' ?>">
                </div>
                <br />
                <div class="form-group">
                    <input class="form-control" type="text" name="programa" placeholder="Cantidad de fotocopias" required disabled
                           value="<?= isset($_GET['programa']) ? $_GET['programa'] : 'programa no encontrado' ?>">
                </div>
                <br />
                <div class="form-group">
                    <input class="form-control" type="number" name="cantidad" placeholder="Cantidad de fotocopias" required
                           value="<?= isset($_GET['cantidad']) ? $_GET['cantidad'] : '6969' ?>">
                </div>
                <br />
                <div class="form-group">
                    <input class="form-control" type="text" name="material" placeholder="Material de las copias" required
                           value="<?= isset($_GET['material']) ? $_GET['material'] : 'Servilleta' ?>">
                </div>
                <br />
                <input class="btn btn-success" type="submit" value="Actualizar" name="actualizar">
                </form>
            </div>
        </div>
    </div>
</div>
