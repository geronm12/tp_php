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
            <a href="restaurantes.php"> Volver </a>
            <h1><?php echo  $row_r["NombreFantasía"] ?></h1>
            <a class="btn btn-primary" href="agregar_comida.php?id=<?php echo $restauranteid ?>">Agregar Plato</a>
            <img src="<?php echo $row_r["Logo"] ?>" />
            <span><?php echo $row_r["Direccion"] ?></span>
            <span><?php echo $row_r["Ubicacion"] ?></span>
            <span><?php echo $row_r["MediosDePago"] ?></span>
            <span><?php echo $row_r["DemoraPromedio"] ?></span>
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
                            <td><?php echo $row["Precio"] ?></td>
                            <td><?php echo $row["TiempoCoccion"] ?></td>
                            <td>
                                <div>
                                    <a href="modificar_comida.php?id=<?php echo $row["Id"] ?>">M</a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row["Id"] ?>">E</a>
                                    <a href="comidas_id.php?id=<?php echo $row["Id"] ?>">D</a>
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