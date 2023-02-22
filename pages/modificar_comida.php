<?php
require("./base/header.php");
require("./navbar.php");
require_once("../php/bd.php");

$id = $_GET["id"];

$sql = "SELECT * FROM comida WHERE Id = '$id'";

$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($query);

?>

<div class="d-flex justify-content-center parent-height-100">
    <div class="box">
        <a href="./restaurantes_id.php?id=<?php echo $row["RestauranteId"]; ?>" class="texto-negro"> <span class="material-symbols-outlined">
                arrow_back
            </span> </a>
        <h3> <?php echo $row["Nombre"] ?> <span class="badge bg-warning">Modificar</span></h3>
        <form class="container" action="../php/modificar_comida.php" method="POST">
            <div class="mb-3">
                <input type="hidden" value="<?php echo $row["Id"] ?>" name="id" />
            </div>
            <div class="mb-3">
                <input type="hidden" value="<?php echo $row["RestauranteId"] ?>" name="restaurante_id" />
            </div>
            <div class="mb-3">
                <label class="form-label">Plato</label>
                <input class="form-control" type="text" placeholder="Ej: Hamburguesa Americana" name="nombre" value="<?php echo $row["Nombre"] ?>" />
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Escriba una breve descripción del plato" id="floatingTextarea" name="descripcion"><?php echo $row["Descripcion"] ?></textarea>
                    <label for="floatingTextarea">Descripción del plato</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input class="form-control" type="number" min="0" placeholder="Ej: 1200,50" name="precio" value="<?php echo $row["Precio"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Tiempo de Cocción (mins)</label>
                <input class="form-control" type="number" min="0" placeholder="Ej: 50" name="tiempo_coccion" value="<?php echo $row["TiempoCoccion"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Foto</label>
                <input class="form-control" type="text" placeholder="Url de la foto" name="imagen" value="<?php echo $row["Imagen"] ?>" />
            </div>
            <button class="btn btn-dark">Guardar</button>
            <a class="btn btn-outline-dark" href="./restaurantes_id.php?id=<?php echo $row["RestauranteId"] ?>">Cancelar</a>
        </form>
    </div>
    <?php
    require("./base/footer.php");
    ?>