<?php
require("./base/header.php");
require("./navbar.php");
require_once("../php/bd.php");

$sql = "SELECT  Id, RazonSocial, NombreFantasía, CUIT from resturante";

$query = mysqli_query($conn, $sql);
?>
<div class="parent-height-100">
    <div class="d-flex justify-content-center">
        <div class="box-no-bg">
            <a class="badge" href="./agregar_restaurante.php" data-toggle="tooltip" data-placement="top" title="Agregar Restaurante">
                <span class="material-symbols-outlined texto-grande">
                    add
                </span>
                <span class="badge badge-pill bg-dark">Nuevo Restaurante</span>
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">CUIT</th>
                        <th scope="col">Razón Social</th>
                        <th scope="col">Nombre Emprendimiento</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <td><?php echo $row["CUIT"] ?></td>
                            <td><?php echo $row["RazonSocial"] ?></td>
                            <td><?php echo $row["NombreFantasía"] ?></td>
                            <td>
                                <div class="fila">
                                    <a class="texto-negro" data-toggle="tooltip" data-placement="top" title="Modificar" href="modificar_restaurante.php?id=<?php echo $row["Id"] ?>"><span class="material-symbols-outlined">
                                            construction
                                        </span></a>
                                    <a class="texto-negro" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row["Id"] ?>"><span class="material-symbols-outlined">
                                            delete
                                        </span></a>
                                    <a class="texto-negro" data-toggle="tooltip" data-placement="top" title="Detalle" href="restaurantes_id.php?id=<?php echo $row["Id"] ?>"><span class="material-symbols-outlined">
                                            visibility
                                        </span></a>
                                    <?php require("./base/modal.php"); ?>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
require("./base/footer.php");
?>