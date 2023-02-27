<?php
require("./base/header.php");
require("./navbar.php");
require_once("../php/bd.php");

$id = $_GET["id"];

$sql = "SELECT * FROM resturante WHERE Id = '$id'";

$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($query);
?>
<div class="d-flex justify-content-center parent">
    <div class="box">
        <a href="./restaurantes.php" class="texto-negro" data-toggle="tooltip" data-placement="top" title="Volver"> <span class="material-symbols-outlined">
                arrow_back
            </span> </a>
        <h3> <?php echo $row["RazonSocial"] ?> <span class="badge bg-warning">Modificar</span></h3>
        <form class="container" action="../php/modificar_restaurante.php" method="POST">
            <div>
                <input type="hidden" value="<?php echo $row["Id"] ?>" name="id" readonly />
            </div>
            <div class="mb-3">
                <label class="form-label">Razón Social</label>
                <input class="form-control" type="text" placeholder="Ej: Unicornio S.A" name="razon_social" value="<?php echo $row["RazonSocial"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre de Fantasía</label>
                <input class="form-control" type="text" placeholder="Ej: Unicornio" name="nombre_fantasia" value="<?php echo $row["NombreFantasía"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">CUIT (sin guiones)</label>
                <input class="form-control" type="text" placeholder="Ej: 00-00000000-0" name="cuit" value="<?php echo $row["CUIT"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Dirección</label>
                <input class="form-control" type="text" placeholder="Ej: Buenos Aires 1000" name="direccion" value="<?php echo $row["Direccion"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Ubicación</label>
                <input class="form-control" type="text" placeholder="Url de google maps" name="ubicacion" value="<?php echo $row["Ubicacion"] ?>" />
                <a href="./guia_ubicacion.php" class="badge bg-dark" data-toggle="tooltip" data-placement="top" title="¿Cómo obtener la ubicación?">Ayuda</a>
            </div>
            <div class="mb-3">
                <label class="form-label">Medios de Pago</label>
                <select class="form-select" name="medios_de_pago">
                    <option value="-1" <?php if ($row["MediosDePago"] == -1) {
                                            echo "selected";
                                        } ?>>Por Defecto</option>
                    <option value="1" <?php if ($row["MediosDePago"] == "todos") {
                                            echo "selected";
                                        } ?>>Todos</option>
                    <option value="2" <?php if ($row["MediosDePago"] == "tarjeta") {
                                            echo "selected";
                                        } ?>>Tarjetas</option>
                    <option value="3" <?php if ($row["MediosDePago"] == "efectivo") {
                                            echo "selected";
                                        } ?>>Efectivo</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Demora Promedio</label>
                <input class="form-control" type="number" min="0" name="demora_promedio" value="<?php echo $row["DemoraPromedio"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Logo</label>
                <input class="form-control" type="text" placeholder="Url de Logo" name="logo" value="<?php echo $row["Logo"] ?>" />
            </div>
            <button class="btn btn-dark">Guardar</button>
            <a class="btn btn-outline-dark" href="./restaurantes.php">Cancelar</a>
        </form>
    </div>

    <?php
    require("./base/footer.php");
    ?>