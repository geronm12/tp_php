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
            <a class="btn btn-primary" href="./agregar_restaurante.php">Nuevo Restaurante</a>
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
                                <div>
                                    <a href="modificar_restaurante.php?id=<?php echo $row["Id"] ?>">M</a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row["Id"] ?>">E</a>
                                    <a href="restaurantes_id.php?id=<?php echo $row["Id"] ?>">D</a>
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