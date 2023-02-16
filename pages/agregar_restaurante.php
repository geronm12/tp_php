<?php
require("./base/header.php");
require("./navbar.php");
?>
<div class="d-flex justify-content-center parent">
    <div class="box">
        <h1>Agregar Restaurante</h1>
        <form class="container" action="../php/agregar_restaurante.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Razón Social</label>
                <input class="form-control" type="text" placeholder="Ej: Unicornio S.A" name="razon_social" />
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre de Fantasía</label>
                <input class="form-control" type="text" placeholder="Ej: Unicornio" name="nombre_fantasia" />
            </div>
            <div class="mb-3">
                <label class="form-label">CUIT (sin guiones)</label>
                <input class="form-control" type="text" placeholder="Ej: 00-00000000-0" name="cuit" />
            </div>
            <div class="mb-3">
                <label class="form-label">Dirección</label>
                <input class="form-control" type="text" placeholder="Ej: Buenos Aires 1000" name="direccion" />
            </div>
            <div class="mb-3">
                <label class="form-label">Ubicación</label>
                <input class="form-control" type="text" placeholder="Url de google maps" name="ubicacion" />
            </div>
            <div class="mb-3">
                <label class="form-label">Medios de Pago</label>
                <select class="form-select" name="medios_de_pago">
                    <option value="1">Todos</option>
                    <option value="2">Tarjetas</option>
                    <option value="3">Efectivo</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Demora Promedio</label>
                <input class="form-control" type="number" min="0" name="demora_promedio" />
            </div>
            <div class="mb-3">
                <label class="form-label">Logo</label>
                <input class="form-control" type="text" placeholder="Url de Logo" name="logo" />
            </div>
            <button class="btn btn-primary">Guardar</button>
            <a class="btn" href="./restaurantes.php">Cancelar</a>
        </form>
    </div>

    <?php
    require("./base/footer.php");
    ?>