<?php
require("./base/header.php");
require("./navbar.php");
?>


<div class="parent-height-100">
    <div class="d-flex justify-content-center">
        <div class="box-no-bg">
            <span><- </span>
                    <h1>Detalle Restaurante</h1>
                    <a class="btn btn-primary" href="agregar_comida.php">Agregar Plato</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Plato</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Tiempo de Coccion</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <div>
                                        <a href="modificar_restaurante.php">M</a>
                                        <a href="#">E</a>
                                        <a href="restaurantes_id.php">D</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
        </div>
    </div>
</div>

<?php
require("./base/footer.php");
?>
<?php
require("./base/footer.php");
?>