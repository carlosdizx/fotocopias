<?php
include("docs/header.php");
include("docs/nav.php");
?>
<!-- Espacio de HTML -->
<div class="container p-4">
    <div class="row">
        <!-- Formulario de insercion de facultades -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="facultdad" id="" placeholder="Ingrese la facultdad" required>
                        </div>
                        <br />
                        <input type="submit" value="Agregard">
                    </form>
                </div>
            </div>
        </div>
        <!-- Tabla de facultades -->
    </div>
</div>

<?php include("docs/footer.php"); ?>
