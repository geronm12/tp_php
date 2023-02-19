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
        <h3><?php echo $row["Nombre"] ?></h3>
        <img src="<?php echo $row["Imagen"] ?>" />
        <span>Descripción</span>
        <p><?php echo $row["Descripcion"] ?></p>
        <div>
            <span>Precio</span> <span>$<?php echo $row["Precio"] ?></span>
            <span>Demora</span> <span><?php echo $row["TiempoCoccion"] ?>'</span>
        </div>
        <a href="./restaurantes_id.php?id=<?php echo $row["RestauranteId"] ?>">Volver</a>
    </div>
</div>

<?php
require("./base/footer.php");
?>