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
        <h1>Restaurante</h1>
        <form class="container" action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Razón Social</label>
                <input class="form-control" type="text" placeholder="Ej: Unicornio S.A" value="<?php echo $row["RazonSocial"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre de Fantasía</label>
                <input class="form-control" type="text" placeholder="Ej: Unicornio" value="<?php echo $row["RazonSocial"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">CUIT (sin guiones)</label>
                <input class="form-control" type="text" placeholder="Ej: 00-00000000-0" value="<?php echo $row["RazonSocial"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Dirección</label>
                <input class="form-control" type="text" placeholder="Ej: Buenos Aires 1000" value="<?php echo $row["RazonSocial"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Ubicación</label>
                <input class="form-control" type="text" placeholder="Url de google maps" value="<?php echo $row["RazonSocial"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Medios de Pago</label>
                <select class="form-select ">
                    <option value="-1" selected>Por Defecto</option>
                    <option value="1">Todos</option>
                    <option value="2">Tarjetas</option>
                    <option value="3">Efectivo</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Demora Promedio</label>
                <input class="form-control" type="number" min="0" value="<?php echo $row["DemoraPromedio"] ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label">Logo</label>
                <input class="form-control" type="text" placeholder="Url de Logo" value="<?php echo $row["RazonSocial"] ?>" />
            </div>
            <button class="btn btn-primary">Guardar</button>
            <a class="btn" href="./restaurantes.php">Cancelar</a>
        </form>
    </div>

    <?php
    require("./base/footer.php");
    ?>