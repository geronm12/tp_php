<?php
require("./base/header.php");
require("./navbar.php");
require_once("../php/bd.php");

$sql = "SELECT * FROM resturante";
$query = mysqli_query($conn, $sql);

?>

<h1>Mira nuestra lista de restaurantes</h1>
<?php
while ($row = mysqli_fetch_array($query)) :
?>
    <h3><?php echo $row["NombreFantasía"] ?></h3>
<?php endwhile; ?>
<?php
require("./base/footer.php")
?>