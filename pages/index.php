<?php
require("./base/header.php");
require("./navbar.php");
require_once("../php/bd.php");

$sql = "SELECT * FROM resturante";
$query = mysqli_query($conn, $sql);

?>
<div class="d-flex justify-content-center">
    <div class="box">
        <h5 class="text-center">Nuestra lista de restaurantes</h5>
        <hr />
        <div class="tarjetas-padre card-deck">
            <?php
            while ($row = mysqli_fetch_array($query)) :
            ?>
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $row["Logo"] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["NombreFantasía"] ?></h5>
                        <hr />
                        <a class="btn btn-dark center" href="./restaurantes_id.php?id=<?php echo $row["Id"] ?>" class="btn btn-primary">Detalle</a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php
require("./base/footer.php")
?>