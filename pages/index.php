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
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Descripción del sitio</h5>
                <p class="card-text"> Sitio de administración de restaurantes y sus respectivos platos que
                    intenta "simular" el funcionamiento de pedidos ya. Desde la pantalla de "Index"
                    se podrán acceder a los detalles de los restaurantes o si no desde la opción "Restaurantes"
                    se podrá acceder a la vista de tabla de los restaurantes.</p>
            </div>
        </div>
        <hr />
        <div class="tarjetas-padre row row-cols-1 row-cols-md-3 g-4">
            <?php
            while ($row = mysqli_fetch_array($query)) :
            ?>
                <div class="card card h-100 text-center pos">
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