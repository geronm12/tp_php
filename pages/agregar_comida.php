<?php
require("./base/header.php");
require("./navbar.php");

$restauranteid = $_GET["id"];

?>

<div class="d-flex justify-content-center parent-height-100">
    <div class="box">
        <h1>Agregar Comida</h1>
        <form class="container" action="../php/agregar_comida.php" method="POST">
            <div class="mb-3">
                <input type="hidden" value="<?php echo $restauranteid ?>" name="restaurante_id" />
            </div>
            <div class="mb-3">
                <label class="form-label">Plato</label>
                <input class="form-control" type="text" placeholder="Ej: Hamburguesa Americana" name="nombre" />
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Escriba una breve descripción del plato" id="floatingTextarea" name="descripcion"></textarea>
                    <label for="floatingTextarea">Descripción del plato</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input class="form-control" type="number" min="0" placeholder="Ej: 1200,50" name="precio" />
            </div>
            <div class="mb-3">
                <label class="form-label">Tiempo de Cocción (mins)</label>
                <input class="form-control" type="number" min="0" placeholder="Ej: 50" name="tiempo_coccion" />
            </div>
            <div class="mb-3">
                <label class="form-label">Foto</label>
                <input class="form-control" type="text" placeholder="Url de la foto" name="imagen" />
            </div>
            <button class="btn btn-primary">Guardar</button>
            <a class="btn btn-outline-dark" href="./restaurantes_id.php?id=<?php echo $restauranteid ?>">Cancelar</a>
        </form>
    </div>
    <?php
    require("./base/footer.php");
    ?>