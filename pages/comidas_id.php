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
        <a href="./restaurantes_id.php?id=<?php echo $row["RestauranteId"] ?>" data-toggle="tooltip" data-placement="top" title="Volver" class="texto-negro">
            <span class="material-symbols-outlined">
                arrow_back
            </span>
        </a>
        <h4>
            <span class="badge bg-dark">Comida</span> <?php echo  $row["Nombre"] ?>
        </h4>
        <div class="d-flex justify-content-center">
            <img class="foto rounded-circle" src="<?php echo $row["Imagen"] ?>" />
        </div>
        <div class="d-flex">
            <div class="d-flex  flex-column item">
                <span class="badge badge-pill bg-dark">Precio</span>
                <span><b>$<?php echo $row["Precio"] ?></b></span>
            </div>
            <div class="d-flex flex-column item">
                <span class="badge badge-pill bg-dark">Demora</span>
                <span><b><?php echo $row["TiempoCoccion"] ?>'</b></span>
            </div>
        </div>
        <hr>
        <span class="badge badge-pill bg-dark">Descripción</span>
        <p class="text-left mt-2"><?php echo $row["Descripcion"] ?></p>
    </div>
</div>

<?php
require("./base/footer.php");
?>