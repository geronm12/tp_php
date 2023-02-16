<?php
require("./base/header.php");
require("./navbar.php");
?>

<div class="d-flex justify-content-center parent">
    <div class="box">
        <h1>Agregar Restaurante</h1>
        <form class="container" action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Restaurante</label>
                <select class="form-select">
                    <option value="1">Todos</option>
                    <option value="2">Tarjetas</option>
                    <option value="3">Efectivo</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre Comida</label>
                <input class="form-control" type="text" placeholder="Ej: Unicornio S.A" />
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Escriba una breve descripción del plato" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Descripción</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Demora Promedio</label>
                <input class="form-control" type="number" min="0" />
            </div>
            <div class="mb-3">
                <label class="form-label">Demora Promedio</label>
                <input class="form-control" type="number" min="0" />
            </div>
            <button class="btn btn-primary">Guardar</button>
            <a class="btn" href="./restaurantes.php">Cancelar</a>
        </form>
    </div>