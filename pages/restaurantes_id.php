<?php
require("./base/header.php");
require("./navbar.php");
require_once("../php/bd.php");

$restauranteid = $_GET["id"];

$sql = "SELECT  Id, Precio, TiempoCoccion, Nombre from comida";

$query = mysqli_query($conn, $sql);


$sql_r = "SELECT * FROM resturante WHERE Id = '$restauranteid'";

$query_r = mysqli_query($conn, $sql_r);

$row_r = mysqli_fetch_array($query_r);

?>


<div class="parent-height-100">
    <div class="d-flex justify-content-center">
        <div class="box-no-bg">
            <a href="restaurantes.php" class="texto-negro"> <span class="material-symbols-outlined">
                    arrow_back
                </span> </a>
            <h4><span class="badge bg-dark">Restaurante</span> <?php echo  $row_r["NombreFantasía"] ?></h4>
            <img src="<?php echo $row_r["Logo"] ?>" />
            <span><?php echo $row_r["Direccion"] ?></span>
            <iframe src="<?php echo $row_r["Ubicacion"] ?>"></iframe>
            <span><?php echo $row_r["MediosDePago"] ?></span>
            <span><?php echo $row_r["DemoraPromedio"] ?></span>
            <a href="agregar_comida.php?id=<?php echo $restauranteid ?>"><span class="material-symbols-outlined">
                    add
                </span></a>
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
                    <?php while ($row = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <td colspan="2"><?php echo $row["Nombre"] ?></td>
                            <td>$<?php echo $row["Precio"] ?></td>
                            <td><?php echo $row["TiempoCoccion"] ?></td>
                            <td>
                                <div>
                                    <a class="texto-negro" data-toggle="tooltip" data-placement="top" title="Modificar" href="modificar_comida.php?id=<?php echo $row["Id"] ?>"><span class="material-symbols-outlined">
                                            construction
                                        </span></a>
                                    <a class="texto-negro" href="#" data-toggle="tooltip" data-placement="top" title="Eliminar" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row["Id"] ?>"><span class="material-symbols-outlined">
                                            delete
                                        </span></a>
                                    <a class="texto-negro" data-toggle="tooltip" data-placement="top" title="Detalle" href="comidas_id.php?id=<?php echo $row["Id"] ?>"><span class="material-symbols-outlined">
                                            visibility
                                        </span></a>
                                    <?php require("./base/modal_comidas.php"); ?>
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
<?php
require("./base/footer.php");
?>